<?php

declare(strict_types=1);

namespace I18Next;

use atk4\core\Exception;
use I18Next\Exception\LanguageAlreadyPresent;
use I18Next\Exception\LanguageLocaleNotExists;
use I18Next\Exception\LanguageNamespaceMisuse;
use I18Next\Exception\LanguagePathNotDefined;
use I18Next\Exception\Misusage;

class Translator implements TranslatorInterface
{
    /** @var Locale[] */
    private $locales = [];

    /** @var string */
    private $language;

    /** @var string */
    private $fallback;

    /** @var string */
    private $translations_path;

    // @TODO Feature - Loading different format : Adding method setLoaderFormat - with validation in this class
    /** @var string */
    private $loader_format = 'json';

    /** @var string[] */
    private $namespace_priority = [];

    /** @var bool */
    private $use_filename_as_namespace = false;

    /**
     * Set the root path of locales folder.
     *
     * @param $path
     *
     * @throws Misusage
     */
    public function setTranslationsPath($path): void
    {
        if (! empty($this->locales)) {
            throw new Misusage('setTranslationsPath must be called before : setLanguagePrimary, setLanguageFallback, addLanguage');
        }

        $this->translations_path = $path;
    }

    /**
     * Set namespace priority.
     * @example : if set $ns1, $ns2, $ns3 it will try in all this 3 namespace starting from 1 => 2 => 3
     *
     * @param mixed ...$namespace_priority
     *
     * @throws LanguageNamespaceMisuse
     */
    public function setNamespacePriority(...$namespace_priority): void
    {
        if (! empty($this->locales)) {
            throw new LanguageNamespaceMisuse('setNamespacePriority must be called before : setLanguagePrimary, setLanguageFallback, addLanguage');
        }

        $this->namespace_priority = $namespace_priority;
    }

    /**
     * Set if filenames will be used as namespaces.
     *
     * @param bool|null $enabled
     *
     * @throws LanguageNamespaceMisuse
     */
    public function useFilenameAsNamespace(?bool $enabled): void
    {
        if (! empty($this->locales)) {
            throw new LanguageNamespaceMisuse('useFilenameAsNamespace must be called before : setLanguagePrimary, setLanguageFallback, addLanguage');
        }

        $this->use_filename_as_namespace = $enabled ?? true;
    }

    /**
     * Set Primary Language.
     *
     * @param string $language_code
     *
     * @throws LanguageAlreadyPresent
     * @throws LanguagePathNotDefined
     * @throws Exception
     */
    public function setLanguagePrimary(string $language_code): void
    {
        $this->language = $language_code;
        $this->addLanguage($language_code);
    }

    /**
     * Add Extra languages.
     *
     * @param string $code
     *
     * @throws Exception
     * @throws LanguageAlreadyPresent
     * @throws LanguagePathNotDefined
     */
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
        $this->locales[$code]->setLoaderFormat($this->loader_format);
        $this->locales[$code]->load($this->translations_path, $this->use_filename_as_namespace, ...$this->namespace_priority);
    }

    /**
     * Set fallback language.
     *
     * @param string $fallback_code
     *
     * @throws Exception
     * @throws LanguageAlreadyPresent
     * @throws LanguagePathNotDefined
     */
    public function setLanguageFallback(string $fallback_code): void
    {
        $this->fallback = $fallback_code;
        $this->addLanguage($fallback_code);
    }

    /**
     * {@inheritdoc}
     */
    public function _(string $key, ?array $parameters = null, ?string $context = null, ?string $locale = null): string
    {
        if ($locale) {
            return $this->getLocale($locale)->process($key, $parameters, $context) ?? $key;
        }

        // try resolve in primary language
        $result = $this->getLocale($this->language)->process($key, $parameters, $context);
        if (null !== $result) {
            return $result;
        }

        // try resolve in fallback language
        if ($this->fallback) {
            $result = $this->getLocale($this->fallback)->process($key, $parameters, $context);
            if (null !== $result) {
                return $result;
            }
        }

        return $key;
    }

    private function getLocale(string $locale): Locale
    {
        $result = $this->locales[$locale] ?? null;

        if (null !== $result) {
            return $result;
        }

        throw new LanguageLocaleNotExists('Requested Locale not exists');
    }
}
