<?php

declare(strict_types=1);

namespace I18Next\Locale;

use atk4\core\ConfigTrait;
use atk4\core\Exception;
use DirectoryIterator;
use I18Next\Exception\TranslationSyntaxError;

/**
 * @internal
 */
final class Translations
{
    use ConfigTrait {
        setConfig as protected;
        readConfig as protected;
    }

    /** @var string[] */
    protected $namespace_priority = [];

    /** @var bool */
    protected $use_filename_as_namespace = false;

    /** @var string */
    private $loader_format = 'json';

    /** @var string */
    private $loader_format_ext = 'json';

    /**
     * @param string      $path
     * @param bool        $use_filename_as_namespace
     * @param string|null ...$namespace_priority
     *
     * @throws Exception
     */
    public function load(string $path, bool $use_filename_as_namespace, ?string ...$namespace_priority): void
    {
        $this->useFilenameAsNamespace($use_filename_as_namespace);
        $this->setNamespacePriority(...$namespace_priority);

        $configs = [];
        foreach (new DirectoryIterator($path) as $fileInfo) {
            if (! $fileInfo->isFile()) {
                continue;
            }

            // read config
            $this->readConfig($fileInfo->getPathname(), $this->loader_format);

            // normalizing
            $this->afterReadProcessForKeyCounters();
            $this->afterReadProcessForKeyDeepInline();

            $this->afterReadAddNamespaceIfNeeded($configs, $fileInfo->getBasename('.'.$this->loader_format_ext));

            // always reset config after every load
            // to prevent merging with other config in ConfigTrait
            $this->config = [];
        }

        // if namespaces are used set loaded configs and return
        if ($this->useNamespaces()) {
            $this->config = $configs;

            return;
        }

        // if not using namespaces replace keys config
        $this->config = call_user_func_array('array_replace_recursive', $configs);
    }

    public function useFilenameAsNamespace(?bool $enabled): void
    {
        $this->use_filename_as_namespace = $enabled ?? true;
    }

    /**
     * @param string|null ...$namespace_priority
     */
    private function setNamespacePriority(?string ...$namespace_priority): void
    {
        $namespace_priority = array_filter($namespace_priority, function ($value) {
            return ! empty($value);
        });

        // exit if no namespace priority
        if (empty($namespace_priority)) {
            return;
        }

        // force use of filename as namespaces
        $this->useFilenameAsNamespace(true);
        $this->namespace_priority = $namespace_priority;
    }

    private function afterReadProcessForKeyCounters(): void
    {
        foreach ($this->config as $key => $value) {
            $key_plural_definition = explode('_', $key);
            $key_plural_definition = end($key_plural_definition);

            if ('plural' === $key_plural_definition || is_numeric($key_plural_definition)) {
                $this->processForCounterKey($key_plural_definition, $key, $value);
            }

            if ('interval' === $key_plural_definition) {
                $this->processForIntervalKey($key_plural_definition, $key, $value);
            }
        }
    }

    private function processForCounterKey(string $key_plural_definition, string $key, string $value): void
    {
        unset($this->config[$key]);

        $cleared_key = substr(
            $key,
            0,
            (strlen($key_plural_definition) + 1 /* the extra undescore before the plural_definition */) * -1
        );

        $counter = 2;
        if ('plural' !== $key_plural_definition) {
            $counter = (int) $key_plural_definition;
        }

        $key_counter_one_value = $this->getConfig($cleared_key);
        if (null !== $key_counter_one_value && ! is_array($key_counter_one_value)) {
            $this->setConfig($cleared_key, []);
            $this->setConfig($cleared_key.'/1', $key_counter_one_value);
        }

        $this->setConfig($cleared_key.'/'.(string) $counter, $value);
    }


    private function processForIntervalKey(string $key_plural_definition, string $key, string $value): void
    {
        $cleared_key = substr(
            $key,
            0,
            (strlen($key_plural_definition) + 1 /* the extra undescore before the plural_definition */) * -1
        );

        $check_last = substr($value,-1) === ';';

        if(!$check_last)
        {
            throw new TranslationSyntaxError([
                'Interval declaration must end with ";" (' . $key .' => ' . $value . ')',
                'key' => $key,
                'value' => $value
            ]);
        }

        $count_intervals = count(explode(';', trim($value,';')));

        $re = '/\((\S*)\)\{(.[^\}]*)\}/m';
        //$str = '(1){one item};(2-7){a few items};(7-inf){a lot of items};';

        preg_match_all($re, $value, $matches, PREG_SET_ORDER, 0);

        if(count($matches) !== $count_intervals)
        {
            throw new TranslationSyntaxError([
                'Interval declaration syntax error (' . $key .' => ' . $value . ')',
                'key' => $key,
                'value' => $value
            ]);
        }

        foreach($matches as $match)
        {
            if(count($match) < 3)
            {
                throw new TranslationSyntaxError([
                    'Interval value syntax incorrect : ' . $value,
                    'key' => $key,
                    'value' => $value,
                    'matches' => $matches,
                    'error_match' => $match
                ]);
            }

            $interval    = explode('-', $match[1]);

            $interval_start = $interval[0];
            $interval_end   = $interval[1] ?? $interval[0];
            if($interval_end === "inf")
            {
                $interval_end = $interval_start;
            }

            $translation = $match[2];

            if($interval_start === $interval_end)
            {
                $this->setConfig($cleared_key.'/'.(string) $interval_start, $translation);
                continue;
            }

            for($i = $interval_start; $i < $interval_end;$i++)
            {
                $this->setConfig($cleared_key.'/'.(string) $i, $translation);
            }
        }
    }

    private function afterReadProcessForKeyDeepInline(): void
    {
        $filtered = array_filter($this->config, function ($key) {
            return false !== strpos($key, '.');
        }, ARRAY_FILTER_USE_KEY);

        foreach ($filtered as $key => $value) {
            unset($this->config[$key]);
            $this->setConfig(str_replace('.', '/', $key), $value);
        }
    }

    private function afterReadAddNamespaceIfNeeded(array &$config, string $namespace): void
    {
        if (! $this->useNamespaces()) {
            $config[] = $this->config;

            return;
        }

        $namespace_key = $this->useNamespaces() ? $namespace : null;
        // use array_filter to remove references
        $config[$namespace_key] = array_filter($this->config, function ($v) {
            return $v;
        });
    }

    public function useNamespaces(): bool
    {
        return $this->use_filename_as_namespace;
    }

    public function getNamespaceRanked()
    {
        return $this->namespace_priority;
    }

    public function setLoaderFormat(string $format): void
    {
        $this->loader_format = $format;

        // @TODO Feature - Loading different format : set extension definition here based on $format
        $this->loader_format_ext = $format;
    }
}
