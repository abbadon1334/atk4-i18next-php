<?php

namespace I18Next\Locale\Processor\Key;

final class KeyCounter extends AbstractProcessorKey
{
    /**
     * {@inheritdoc}
     */
    public static function willBeProcessed(string $key): bool
    {
        if (! is_numeric($key)) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function process(): void
    {
        $this->results[$this->getKeyCleared().'/'.$this->key_plural] = $this->value;
    }
}
