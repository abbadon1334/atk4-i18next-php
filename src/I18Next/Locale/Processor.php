<?php declare(strict_types=1);


namespace I18Next\Locale;

use I18Next\Locale\Processor\Key;
use I18Next\Locale\Processor\Value;

class Processor
{
    /** @var Translations */
    protected $translations;

    /** @var Key */
    protected $processorKey;

    /** @var Value */
    protected $processorValue;

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
    public function process(string $key, ?array $parameters = NULL, ?string $context = NULL): ?string
    {
        $counter = $this->getCountFromParameters($parameters);
        $context = $this->getContextFromParameters($parameters, $context);

        $found_key = $this->processorKey->processKey($key, $context, $counter);

        return $this->processorValue->processValue($found_key, $parameters);
    }

    protected function getCountFromParameters(?array $parameters = NULL): ?int
    {
        return isset($parameters['count']) ? (int)$parameters['count'] : NULL;
    }

    protected function getContextFromParameters(?array $parameters = NULL, ?string $context = NULL): ?string
    {
        return $parameters['context'] ?? $context;
    }
}
