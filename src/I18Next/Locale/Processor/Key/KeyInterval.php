<?php


namespace I18Next\Locale\Processor\Key;


use I18Next\Exception\TranslationSyntaxError;

final class KeyInterval extends AbstractProcessorKey
{
    /**
     * {@inheritDoc}
     */
    static public function willBeProcessed(string $key): bool
    {
        if ('interval' !== $key) {
            return false;
        }

        return true;
    }

    /**
     * {@inheritDoc}
     * @throws TranslationSyntaxError
     */
    protected function process(): void
    {
        // che if last char is ;
        $check_last = substr($this->value, -1) === ';';
        if (!$check_last) {
            throw new TranslationSyntaxError([
                'Interval declaration must end with ";" (' . $this->key . ' => ' . $this->value . ')',
                'key'   => $this->key,
                'value' => $this->value,
            ]);
        }

        $count_intervals = count(explode(';', trim($this->value, ';')));

        $re = '/\((\S*)\)\{(.[^\}]*)\}/m';
        //$str = '(1){one item};(2-7){a few items};(7-inf){a lot of items};';

        preg_match_all($re, $this->value, $matches, PREG_SET_ORDER, 0);

        if (count($matches) !== $count_intervals) {
            throw new TranslationSyntaxError([
                'Interval declaration syntax error (' . $this->key . ' => ' . $this->value . ')',
                'key'   => $this->key,
                'value' => $this->value,
            ]);
        }

        $cleared_key = $this->getKeyCleared();

        foreach ($matches as $match) {

            $interval = explode('-', $match[1]);

            $interval_start = $interval[0];
            $interval_end   = $interval[1] ?? $interval[0];
            if ($interval_end === 'inf') {
                $interval_end = $interval_start;
            }

            $translation = $match[2];

            if ($interval_start === $interval_end) {
                $this->results[$cleared_key . '/' . (string)$interval_start] = $translation;
                continue;
            }

            for ($i = $interval_start; $i < $interval_end; $i++) {
                $this->results[$cleared_key . '/' . (string)$i] = $translation;
            }
        }
    }
}