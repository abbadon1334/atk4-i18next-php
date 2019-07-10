<?php

declare(strict_types=1);

namespace I18Next\Locale\Processor;

use I18Next\Locale\Processor;

class Value extends AbstractProcessor
{
    public function processValue(?string &$found_key, ?array $parameters): ?string
    {
        if (null === $found_key) {
            return null;
        }

        return $this->processValueInterpolate($found_key, $parameters);
    }

    private function processValueInterpolate(string &$found_key, ?array $parameters = null)
    {
        $parameters = $parameters ?? [];
        if (empty($parameters)) {
            $this->processValueNested($found_key, $parameters);

            return $found_key;
        }

        foreach ($parameters as $index => $value) {
            $found_key = str_replace('{{'.$index.'}}', $value, $found_key);
            $this->processValueNested($found_key, $parameters);
        }

        return $found_key;
    }

    public function processValueNested(string &$found_key, array $parameters): void
    {
        $re = '/\$t\((.*?)\)/';
        preg_match_all($re, $found_key, $matches, PREG_SET_ORDER, 0);

        if (0 === count($matches)) {
            return;
        }

        foreach ($matches as $match) {
            $match_found = $match[0];

            $nested = $match[1];
            $nested_key = strtok($nested, ',');
            $nested_parameters = [];

            preg_match('/{.*}/', $nested, $nested_matches);

            if (count($nested_matches) > 0) {
                $nested_parameters = $nested_matches[0];

                foreach ($parameters as $index => $value) {
                    $nested_parameters = str_replace('{{'.$index.'}}', $value, $nested_parameters);
                }

                $nested_parameters = json_decode($nested_parameters, true);
            }

            $value = (new Processor($this->translations))->process($nested_key, (array) $nested_parameters);
            $found_key = str_replace($match_found, $value, $found_key);
        }
    }
}
