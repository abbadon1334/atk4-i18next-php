<?php

declare(strict_types=1);

namespace I18Next\Locale;

use atk4\core\ConfigTrait;
use atk4\core\Exception;
use DirectoryIterator;
use I18Next\Exception\TranslationSyntaxError;
use I18Next\Locale\Processor\Key\AbstractProcessorKey;
use I18Next\Locale\Processor\Key\KeyCounter;
use I18Next\Locale\Processor\Key\KeyInterval;
use I18Next\Locale\Processor\Key\KeyPlural;

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

        $configs = $this->loadSingle($path);

        // if namespaces are used set loaded configs and return
        if ($this->useNamespaces()) {
            $this->config = $configs;

            return;
        }

        // if not using namespaces replace keys config
        $this->config = call_user_func_array('array_replace_recursive', $configs);
    }

    /**
     * @param string $path
     *
     * @return array
     * @throws Exception
     * @throws TranslationSyntaxError
     */
    private function loadSingle(string $path): array
    {
        $configs = [];
        foreach (new DirectoryIterator($path) as $fileInfo) {
            if (!$fileInfo->isFile()) {
                continue;
            }

            // read config
            $this->readConfig($fileInfo->getPathname(), $this->loader_format);

            // normalizing
            $this->afterReadProcessForKeyCounters();
            $this->afterReadProcessForKeyDeepInline();

            $this->afterReadAddNamespaceIfNeeded($configs, $fileInfo->getBasename('.' . $this->loader_format_ext));

            // always reset config after every load
            // to prevent merging with other config in ConfigTrait
            $this->config = [];
        }
        return $configs;
    }

    /**
     * @param bool|null $enabled
     */
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

    private function processKeyVariation(string $processorClass, string $key, $value)
    {
        $key_plural_definition = explode('_', $key);
        $key_plural_definition = end($key_plural_definition);

        $processorClass = '\I18Next\Locale\Processor\Key\\' . $processorClass;

        /** @var AbstractProcessorKey $processorClass */
        $processor = new $processorClass($key_plural_definition, $key, $value);
        if(!$processorClass::willBeProcessed($key_plural_definition))
        {
            return;
        }

        $cleared_key = $processor->getKeyCleared();
        $key_plural_one = $this->getConfig($cleared_key);
        if (null !== $key_plural_one && ! is_array($key_plural_one)) {
            $this->setConfig($cleared_key, []);
            $this->setConfig($cleared_key.'/1', $key_plural_one);
        }

        foreach($processor->getResult() as $processed_key => $processed_value)
        {
            $this->setConfig($processed_key, $processed_value);
        }
    }

    /**
     * @throws Exception
     */
    private function afterReadProcessForKeyCounters(): void
    {
        foreach ($this->config as $key => $value) {
            $this->processKeyVariation("KeyPlural", $key, $value);
            $this->processKeyVariation("KeyCounter", $key, $value);
            $this->processKeyVariation("KeyInterval", $key, $value);
        }
    }

    /**
     *
     */
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

    /**
     * @param array  $config
     * @param string $namespace
     */
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

    /**
     * @return bool
     */
    public function useNamespaces(): bool
    {
        return $this->use_filename_as_namespace;
    }

    /**
     * @return string[]
     */
    public function getNamespaceRanked()
    {
        return $this->namespace_priority;
    }

    /**
     * @param string $format
     */
    public function setLoaderFormat(string $format): void
    {
        $this->loader_format = $format;

        // @TODO Feature - Loading different format : set extension definition here based on $format
        $this->loader_format_ext = $format;
    }

}
