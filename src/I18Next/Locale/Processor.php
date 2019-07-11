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

    public function __construct(Translations $translations)
    {
        $this->translations   = $translations;
        $this->processorKey   = new Key($this->translations);
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
        $counter   = $this->getCountFromParameters($parameters);
        $context   = $this->getContextFromParameters($parameters, $context);

        $key       = $this->processKeyForNamespaces($key, $this->getNamespaceFromParameters($parameters));

        $found_key = $this->processorKey->processKey($key, $context, $counter);

        return $this->processorValue->processValue($found_key, $parameters);
    }

    private function getKeyNamespace($key)
    {
        preg_match('/^(\S+)\:/', $key, $matches);

        if (2 !== count($matches)) {
            return null;
        }

        return $matches[1];
    }

    private function getCountFromParameters(?array $parameters = null): ?int
    {
        return isset($parameters['count']) ? (int)$parameters['count'] : null;
    }

    private function getContextFromParameters(?array $parameters = null, ?string $context = null): ?string
    {
        return $parameters['context'] ?? $context;
    }

    private function getNamespaceFromParameters(?array $parameters)
    {
        return $parameters['namespace'] ?? null;
    }

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
