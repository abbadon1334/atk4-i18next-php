<?php

declare(strict_types=1);

namespace I18Next\Locale\Processor;

use I18Next\Locale\Processor;

/**
 * @internal
 */
final class Value extends AbstractProcessor
{
    /**
     * @param string|null $found_key
     * @param array|null  $parameters
     *
     * @return string|null
     */
    public function processValue(?string &$found_key, ?array $parameters): ?string
    {
        return $this->processValueInterpolate($found_key, $parameters);
    }

    /**
     * @param string     $found_key
     * @param array|null $parameters
     *
     * @return mixed|string
     */
    private function processValueInterpolate(string &$found_key, ?array $parameters = null)
    {
        $parameters = $parameters ?? [];
        if (empty($parameters)) {
            $this->processValueNested($found_key, $parameters);

            return $found_key;
        }

        preg_match_all(
            '/{{([\S]+)}}/m',
            $found_key,
            $matches,
            PREG_SET_ORDER,
            0
        );

        foreach ($matches as $group) {
            foreach ($group as $key => $index) {
                if (0 === $key) {
                    continue;
                }

                $found_key = $this->processValueReplaceParameter($found_key, $index, $parameters);
                $this->processValueNested($found_key, $parameters);
            }
        }

        return $found_key;
    }

    /**
     * @param string $found_key
     * @param        $index
     * @param        $parameters
     *
     * @return mixed|string
     */
    private function processValueReplaceParameter(string &$found_key, $index, $parameters)
    {
        $value = $parameters[$index] ?? null;

        $token = explode('.', $index);
        if (isset($token[1])) {
            $value = $parameters[$token[0]] ?? null;

            if (is_subclass_of($value, '\atk4\data\Model', true)) {
                /** @var \atk4\data\Model $value */
                $value = $value->get();
            }

            if (is_object($value)) {
                $value = (array) $value;
            }

            if (is_array($value)) {
                $value = $value[$token[1]] ?? '{{'.$index.'}}';
            }
        }

        $found_key = str_replace('{{'.$index.'}}', $value, $found_key);

        return $found_key;
    }

    /**
     * @param string $found_key
     * @param array  $parameters
     */
    private function processValueNested(string &$found_key, array $parameters): void
    {
        preg_match_all(
            '/\$t\((.*?)\)/',
            $found_key,
            $matches,
            PREG_SET_ORDER,
            0
        );

        if (0 === count($matches)) {
            return;
        }

        foreach ($matches as $match) {
            $match_found = $match[0];

            $nested = $match[1];
            $nested_key = strtok($nested, ',');
            $nested_parameters = [];

            preg_match(
                '/{.*}/',
                $nested,
                $nested_matches
            );

            if (count($nested_matches) > 0) {
                $nested_parameters = $nested_matches[0];

                foreach ($parameters as $index => $value) {
                    $nested_parameters = str_replace('{{'.$index.'}}', $value, $nested_parameters);
                }

                $nested_parameters = json_decode($nested_parameters, true);
            }

            $value = (new Processor($this->translations))->process((string) $nested_key, (array) $nested_parameters);

            $found_key = str_replace($match_found, $value, $found_key);
        }
    }
}
