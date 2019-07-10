<?php declare(strict_types=1);

namespace I18Next;

use I18Next\Exception\LanguageAlreadyPresent;
use I18Next\Exception\LanguageLocaleNotExists;
use I18Next\Exception\LanguagePathNotDefined;

class Translator
{
    /** @var Locale[] */
    public $locales = [];

    /** @var string */
    private $language;

    /** @var string */
    private $fallback;

    /** @var string */
    private $translations_path;
    /**
     * @var array
     */
    private $namespace_priority = [];
    /**
     * @var bool|null
     */
    private $use_filename_as_namespace = false;

    public function setTranslationsPath($path): void
    {
        $this->translations_path = $path;
    }

    public function setNamespacePriority(...$namespace_priority): void
    {
        $this->namespace_priority = $namespace_priority;
    }

    public function useFilenameAsNamespace(?bool $enabled)
    {
        $this->use_filename_as_namespace = $enabled ?? true;
    }

    public function setLanguagePrimary(string $language_code): void
    {
        $this->language = $language_code;
        $this->addLanguage($language_code);
    }

    public function addLanguage(string $code): void
    {
        // if already present raise error
        // even if primary and fallback are the same, here will throw. GG
        if (isset($this->locales[$code])) {
            throw new LanguageAlreadyPresent('Language Code already present');
        }

        if (empty($this->translations_path)) {
            throw new LanguagePathNotDefined('Translation Path must be defined before adding languages');
        }

        $this->locales[$code] = new Locale($code);
        $this->locales[$code]->load($this->translations_path, $this->use_filename_as_namespace, ...
            $this->namespace_priority);
    }

    public function setLanguageFallback(string $fallback_code): void
    {
        $this->fallback = $fallback_code;
        $this->addLanguage($fallback_code);
    }

    public function _(string $key, ?array $parameters = NULL, ?string $context = NULL, ?string $locale = NULL): string
    {
        if ($locale) {
            return $this->getLocale($locale)->process($key, $parameters, $context) ?? $key;
        }

        // try resolve in primary language
        $result = $this->getLocale($this->language)->process($key, $parameters, $context);
        if (NULL !== $result) {
            return $result;
        }

        // try resolve in fallback language
        if ($this->fallback) {
            $result = $this->getLocale($this->fallback)->process($key, $parameters, $context);
            if (NULL !== $result) {
                return $result;
            }
        }

        return $key;
    }

    protected function getLocale(string $locale): Locale
    {
        $result = $this->locales[$locale] ?? NULL;

        if (NULL !== $result) {
            return $result;
        }

        throw new LanguageLocaleNotExists('Requested Locale not exists');
    }
}
