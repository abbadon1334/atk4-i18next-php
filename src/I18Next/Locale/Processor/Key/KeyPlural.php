<?php


namespace I18Next\Locale\Processor\Key;

final class KeyPlural extends AbstractProcessorKey
{
    /**
     * {@inheritDoc}
     */
    static public function willBeProcessed(string $key): bool
    {
        if ('plural' !== $key) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritDoc}
     */
    protected function process(): void
    {
        $this->results[$this->getKeyCleared() . '/2'] = $this->value;
    }
}