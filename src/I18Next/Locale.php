<?php

declare(strict_types=1);

namespace I18Next;

use atk4\core\Exception;
use I18Next\Locale\Processor;
use I18Next\Locale\Translations;

/**
 * @internal
 */
final class Locale
{
    /** @var string */
    private $code;

    /**
     * @var Processor
     */
    private $processor;
    /**
     * @var Translations
     */
    private $translations;

    /**
     * Locale constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
        $this->translations = new Translations();
        $this->processor = new Processor($this->translations);
    }

    /**
     * @param string      $path
     * @param bool        $use_filename_as_namespace
     * @param string|null ...$namespace_priority
     *
     * @throws Exception
     */
    public function load(string $path, bool $use_filename_as_namespace, ?string ...$namespace_priority): void
    {
        $this->translations->load($path.DIRECTORY_SEPARATOR.$this->code, $use_filename_as_namespace, ...$namespace_priority);
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
        return $this->processor->process($key, $parameters, $context);
    }

    /**
     * @param string $format
     */
    public function setLoaderFormat(string $format): void
    {
        $this->translations->setLoaderFormat($format);
    }
}
