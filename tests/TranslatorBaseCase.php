<?php

namespace I18Next\Tests;

use I18Next\Translator;
use PHPUnit\Framework\TestCase;

abstract class TranslatorBaseCase extends TestCase
{
    /** @var Translator */
    public $translator;

    protected function setUp(): void
    {
        $this->translator = new TranslatorMock();
        $this->translator->setTranslationsPath(__DIR__.'/data/locales');
    }

    protected function setupTranslatorLanguages(string $language, ?string $fallback = null)
    {
        $this->translator->setLanguagePrimary($language);

        if ($fallback !== null) {
            $this->translator->setLanguageFallback($fallback);
        }
    }
}
