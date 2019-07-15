<?php

declare(strict_types=1);

namespace I18Next\Locale\Processor;

/**
 * @internal
 */
final class Key extends AbstractProcessor
{
    /**
     * @param string      $key
     * @param string|null $context
     * @param int|null    $counter
     *
     * @return string|null
     */
    public function processKey(string $key, ?string $context = null, ?int $counter = null)
    {
        // if defined add context needed in any case
        if ($context) {
            $key .= '_'.$context;
        }

        // exit if not use namespaces
        if (! $this->translations->useNamespaces()) {
            return $this->processWithCounter($key, $counter);
        }

        return $this->processWithNamespaceWithCounter($key, $counter);
    }

    /**
     * @param string   $key
     * @param int|null $counter
     *
     * @return mixed|null
     */
    private function processWithCounter(string $key, ?int $counter = null)
    {
        if (null === $counter) {
            $result = $this->process($key);
            // cover case : when key has plural but is called without specific $counter
            if (is_array($result) && isset($result[1])) {
                return $result[1];
            }

            return $result;
        }

        // if there is a counter can be higher than defined
        $key_all_plurals = $this->process($key);
        // not is array return null
        if (! is_array($key_all_plurals)) {
            return null;
        }

        $key_all_plurals_keys = array_keys($key_all_plurals);

        $counter = $counter ?? 1;
        $key_all_plurals_max = (int) end($key_all_plurals_keys);
        if ($counter > $key_all_plurals_max) {
            return end($key_all_plurals);
        }

        return $this->process($key.'/'.$counter);
    }

    /**
     * @param $key
     *
     * @return mixed|null
     */
    private function process($key)
    {
        $key = str_replace('.', '/', $key);

        return $this->translations->getConfig($key) ?? null;
    }

    /**
     * @param string   $key
     * @param int|null $counter
     *
     * @return mixed|null
     */
    private function processWithNamespaceWithCounter(string $key, ?int $counter = null)
    {
        if (null === $counter) {
            return $this->processWithNamespace($key);
        }

        // if there is a counter can be higher than defined
        $key_all_plurals = $this->processWithNamespace($key);
        // not is array return null
        if (! is_array($key_all_plurals)) {
            return null;
        }

        $key_all_plurals_keys = array_keys($key_all_plurals);

        $counter = $counter ?? 1;
        $key_all_plurals_max = (int) end($key_all_plurals_keys);
        if ($counter > $key_all_plurals_max) {
            return end($key_all_plurals);
        }

        return $this->processWithNamespace($key.'/'.$counter);
    }

    /**
     * @param $key
     *
     * @return mixed|null
     */
    private function processWithNamespace($key)
    {
        $key_namespace = $this->getKeyNamespace($key);
        $key = $this->getOnlyKeyFromNamespacedKey($key, $key_namespace);

        // try get original namespaced key
        $found = $this->process($key_namespace.'/'.$key);
        // if found exit
        if (null !== $found) {
            return $found;
        }

        // if not found try to find key with fallback namespaces
        foreach ($this->translations->getNamespaceRanked() as $namespace_ranked) {
            // try found with fallback namespace
            $found = $this->process($namespace_ranked.'/'.$key);
            // if found exit
            if (null !== $found) {
                return $found;
            }
        }
    }

    /**
     * @param $key
     *
     * @return string|null
     */
    private function getKeyNamespace($key)
    {
        // any strange charcter is forced by filesystem and i hope common sense
        preg_match('/[\S]+:/A', $key, $matches);

        $result = $matches[0] ?? null;

        return null !== $result ? trim($result, ':') : null;
    }

    /**
     * @param $key
     * @param $namespace
     *
     * @return bool|string
     */
    private function getOnlyKeyFromNamespacedKey($key, $namespace)
    {
        return substr($key, $namespace ? strlen($namespace.':') : 0);
    }
}
