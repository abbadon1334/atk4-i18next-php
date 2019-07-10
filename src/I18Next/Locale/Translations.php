<?php

declare(strict_types=1);

namespace I18Next\Locale;

use atk4\core\ConfigTrait;
use atk4\core\Exception;
use DirectoryIterator;

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

    /**
     * @param string      $path
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
            $this->readConfig($fileInfo->getPathname(), 'json');

            // normalizing
            $this->afterReadProcessForKeyCounters();
            $this->afterReadProcessForKeyDeepInline();
            $this->afterReadAddNamespaceIfNeeded($configs, $fileInfo->getBasename('.json'));

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

    public function useFilenameAsNamespace(?bool $enabled)
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

    private function afterReadProcessForKeyCounters()
    {
        foreach ($this->config as $key => $value) {
            $key_plural_definition = explode('_', $key);
            $key_plural_definition = end($key_plural_definition);

            if ($key_plural_definition === 'plural' || is_numeric($key_plural_definition)) {
                $this->processForCounterKey($key_plural_definition, $key, $value);
            }
        }
    }

    private function processForCounterKey(string $key_plural_definition, string $key, string $value)
    {
        unset($this->config[$key]);

        $cleared_key = substr($key, 0,
            (strlen($key_plural_definition) + 1 /* the extra undescore before the plural_definition */) * -1);

        $counter = 2;
        if ($key_plural_definition !== 'plural') {
            $counter = (int) $key_plural_definition;
        }

        $key_counter_one_value = $this->getConfig($cleared_key);
        if (null !== $key_counter_one_value && ! is_array($key_counter_one_value)) {
            $this->setConfig($cleared_key, []);
            $this->setConfig($cleared_key.'/1', $key_counter_one_value);
        }

        $this->setConfig($cleared_key.'/'.(string) $counter, $value);
    }

    private function afterReadProcessForKeyDeepInline()
    {
        $filtered = array_filter($this->config, function ($key) {
            return strpos($key, '.') !== false;
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
}
