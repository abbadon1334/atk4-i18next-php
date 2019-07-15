<?php

declare(strict_types=1);

namespace I18Next;

use atk4\core\Exception;
use I18Next\Exception\LanguageAlreadyPresent;
use I18Next\Exception\LanguageNamespaceMisuse;
use I18Next\Exception\LanguagePathNotDefined;
use I18Next\Exception\Misusage;

final class TranslatorStatic
{
    /** @var Translator */
    private static $translator;

    public static function instance() : Translator
    {
        if (! self::$translator) {
            self::$translator = new Translator();
        }

        return self::$translator;
    }

    /**
     * @param string $path
     *
     * @throws Misusage
     */
    public static function setTranslationsPath(string $path): void
    {
        self::instance()->setTranslationsPath($path);
    }

    /**
     * @param mixed ...$namespace_priority
     *
     * @throws LanguageNamespaceMisuse
     */
    public static function setNamespacePriority(...$namespace_priority): void
    {
        self::instance()->setNamespacePriority(...$namespace_priority);
    }

    /**
     * @param bool|null $enabled
     *
     * @throws LanguageNamespaceMisuse
     */
    public static function useFilenameAsNamespace(?bool $enabled): void
    {
        self::instance()->useFilenameAsNamespace($enabled);
    }

    /**
     * @param string $language_code
     *
     * @throws Exception
     * @throws LanguageAlreadyPresent
     * @throws LanguagePathNotDefined
     */
    public static function setLanguagePrimary(string $language_code): void
    {
        self::instance()->setLanguagePrimary($language_code);
    }

    /**
     * @param string $code
     *
     * @throws Exception
     * @throws LanguageAlreadyPresent
     * @throws LanguagePathNotDefined
     */
    public static function addLanguage(string $code): void
    {
        self::instance()->addLanguage($code);
    }

    /**
     * @param string $fallback_code
     *
     * @throws Exception
     * @throws LanguageAlreadyPresent
     * @throws LanguagePathNotDefined
     */
    public static function setLanguageFallback(string $fallback_code): void
    {
        self::instance()->setLanguageFallback($fallback_code);
    }

    /**
     * @param string      $key
     * @param array|null  $parameters
     * @param string|null $context
     * @param string|null $locale
     *
     * @return string
     */
    public static function _(string $key, ?array $parameters = null, ?string $context = null, ?string $locale = null): string
    {
        return self::instance()->_($key, $parameters, $context, $locale);
    }

    /**
     * Register global function _.
     */
    public static function register()
    {
        include_once __DIR__.'/TranslatorStatic_functions.php';
    }
}
