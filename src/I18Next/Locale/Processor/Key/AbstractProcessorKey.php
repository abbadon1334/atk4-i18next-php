<?php

namespace I18Next\Locale\Processor\Key;

abstract class AbstractProcessorKey
{
    /** @var string */
    protected $key_plural;

    /** @var string */
    protected $key;

    /** @var string */
    protected $value;

    /** @var array */
    protected $results = [];

    /**
     * AbstractProcessorKey constructor.
     *
     * @param string $key_plural
     * @param string $key
     * @param        $value
     */
    public function __construct(string $key_plural, string $key, $value)
    {
        $this->key_plural = $key_plural;
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKeyCleared(): string
    {
        $len = strlen($this->key_plural);

        /* the extra underscore before the plural_definition */
        $len++;

        return substr($this->key, 0, -$len);
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        if ($this->check()) {
            $this->process();
        }

        return $this->results;
    }

    /**
     * @return bool
     */
    protected function check(): bool
    {
        return static::willBeProcessed($this->key_plural);
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    abstract public static function willBeProcessed(string $key): bool;

    abstract protected function process(): void;
}
