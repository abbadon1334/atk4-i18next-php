<?php declare(strict_types=1);


namespace I18Next;

use atk4\core\Exception;
use I18Next\Locale\Processor;
use I18Next\Locale\Translations;

class Locale
{
    /** @var string */
    protected $code;

    protected $processor;
    protected $translations;

    public function __construct(string $code)
    {
        $this->code         = $code;
        $this->translations = new Translations();
        $this->processor    = new Processor($this->translations);
    }

    /**
     * @param string      $path
     * @param string|null ...$namespace_priority
     *
     * @throws Exception
     */
    public function load(string $path, bool $use_filename_as_namespace, ?string ...$namespace_priority): void
    {
        $this->translations->load($path . DIRECTORY_SEPARATOR . $this->code, $use_filename_as_namespace, ...
            $namespace_priority);
    }

    public function useNamespace(): bool
    {
        return $this->translations->useNamespaces();
    }

    public function process(string $key, ?array $parameters = NULL, ?string $context = NULL): ?string
    {
        return $this->processor->process($key, $parameters, $context);
    }
}
