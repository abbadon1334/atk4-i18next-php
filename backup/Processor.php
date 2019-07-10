<?php declare(strict_types=1);


namespace I18Next;

use atk4\core\DynamicMethodTrait;
use atk4\core\HookTrait;

/**
 * @method getKeyFromLocale(string $key) : string|null
 */
class Processor
{
    use HookTrait;
    use DynamicMethodTrait;
    /** @var Locale */
    private $locale;

    public function __construct(Locale $locale)
    {
        $this->locale = $locale;
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
        $key = $this->processBaseKey($key, $context);

        if (!$this->hasCountInParameters($parameters)) {
            return $this->processResult($this->getKeyFromLocale($key), $parameters);
        }

        $counter = $this->getCountFromParameters($parameters);

        return $this->processResult($this->getPluralKey($key, $counter), $parameters);
    }


    /**
     * @param string      $key
     * @param string|null $context
     *
     * @return string
     */
    protected function processBaseKey(string $key, ?string $context): string
    {
        if ($context) {
            $key .= '_'.$context;
        }

        return $key;
    }

    protected function hasCountInParameters(?array $parameters = null): bool
    {
        return isset($parameters['count']) ? true : false;
    }

    protected function getCountFromParameters(?array $parameters = null): int
    {
        return (int) $parameters['count'];
    }

    private function getPluralKeyByCounter(string $key, int $counter)
    {
        return $this->getKeyFromLocale($key.'_'.$counter);
    }

    private function getPluralKeyByString(string $key, int $counter)
    {
        if (1 === $counter) {
            return $this->getKeyFromLocale($key);
        }

        return $this->getKeyFromLocale($key.'_plural');
    }

    /**
     * @param string $key
     * @param int    $counter
     *
     * @return string|null
     */
    protected function getPluralKey(string $key, int $counter): ?string
    {
        $result = $this->getPluralKeyByCounter($key, $counter);

        if ($result) {
            return $result;
        }

        return $this->getPluralKeyByString($key, $counter);
    }

    /**
     * @param string     $key
     * @param array|null $parameters
     *
     * @return string|null
     */
    protected function processResult(?string $key, ?array $parameters): ?string
    {
        if (null === $key) {
            return null;
        }

        if (!is_array($parameters)) {
            return $key;
        }

        $replace = [];

        foreach ($parameters as $index => $value) {
            $replace['{{'.$index.'}}'] = $value;
        }

        return str_replace(array_keys($replace), array_values($replace), $key);
    }

    protected function processNested($value)
    {
        $re = '/\$t\((.*?)\)/';
        preg_match_all($re, $value, $matches, PREG_SET_ORDER, 0);

        if (0 === count($matches)) {
            return $value;
        }

        foreach ($matches as $match) {
            $nested            = $match[1];
            $nested_key        = strtok($nested, ',');
            $nested_parameters = [];

            preg_match('/{.*}/', $nested, $nested_matches);

            if (count($nested_matches) > 0) {
                $nested_parameters = json_decode($match[0]);
            }

            return $this->process($nested_key, $nested_parameters, '');
        }
    }
}
