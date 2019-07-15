<?php


namespace I18Next\Locale\Processor\Key;


final class KeyCounter extends AbstractProcessorKey
{
    /**
     * {@inheritDoc}
     */
    static public function willBeProcessed(string $key): bool
    {
        if (!is_numeric($key)) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function process(): void
    {
        $this->results[$this->getKeyCleared() . '/' . $this->key_plural] = $this->value;
    }
}