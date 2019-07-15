<?php

declare(strict_types=1);

namespace I18Next\Locale;

use I18Next\Locale\Processor\Key;
use I18Next\Locale\Processor\Value;

/**
 * @internal
 */
final class Processor
{
    /** @var Translations */
    private $translations;

    /** @var Key */
    private $processorKey;

    /** @var Value */
    private $processorValue;

    /**
     * Processor constructor.
     *
     * @param Translations $translations
     */
    public function __construct(Translations $translations)
    {
        $this->translations = $translations;
        $this->processorKey = new Key($this->translations);
        $this->processorValue = new Value($this->translations);
    }

    /**
     * @param string      $key
     * @param array|null  $parameters
     * @param string|null $context
     *
     * @return string|null
     */
    public function process(string $key, ?array $parameters = null, ?string $context = null): ?string
    {
        /**
         * @TODO PARSING OF Key must happen here
         */
        $counter = $this->getCountFromParameters($parameters);
        $context = $this->getContextFromParameters($parameters, $context);

        $key = $this->processKeyForNamespaces($key, $this->getNamespaceFromParameters($parameters));

        $found_key = $this->processorKey->processKey($key, $context, $counter);

        $found_key = $found_key ?? $key; // too much recursion and problem with plurals

        $found_key = $this->processorValue->processValue($found_key, $parameters);

        if ($found_key !== $key) {
            return $found_key;
        }

        return null;
    }

    /**
     * @param $key
     *
     * @return mixed|void
     */
    private function getKeyNamespace($key)
    {
        preg_match('/^(\S+)\:/', $key, $matches);

        if (2 !== count($matches)) {
            return;
        }

        return $matches[1];
    }

    /**
     * @param array|null $parameters
     *
     * @return int|null
     */
    private function getCountFromParameters(?array $parameters = null): ?int
    {
        return isset($parameters['count']) ? (int) $parameters['count'] : null;
    }

    /**
     * @param array|null  $parameters
     * @param string|null $context
     *
     * @return string|null
     */
    private function getContextFromParameters(?array $parameters = null, ?string $context = null): ?string
    {
        return $parameters['context'] ?? $context;
    }

    /**
     * @param array|null $parameters
     *
     * @return mixed|null
     */
    private function getNamespaceFromParameters(?array $parameters)
    {
        return $parameters['namespace'] ?? null;
    }

    /**
     * @param string      $key
     * @param string|null $keyNamespaceFromParameters
     *
     * @return string
     */
    private function processKeyForNamespaces(string $key, ?string $keyNamespaceFromParameters = null): string
    {
        if (null === $keyNamespaceFromParameters) {
            return $key;
        }

        $keyNamespace = $this->getKeyNamespace($key);

        if (null !== $keyNamespace) {
            return str_replace($keyNamespace, $keyNamespaceFromParameters, $key);
        }

        return $keyNamespaceFromParameters.':'.$key;
    }
}
