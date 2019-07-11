<?php

namespace I18Next\Tests;

use I18Next\Exception\LanguageNamespaceMisuse;
use I18Next\Exception\LanguageAlreadyPresent;
use I18Next\Exception\LanguageLocaleNotExists;
use I18Next\Exception\LanguagePathNotDefined;
use I18Next\Exception\Misusage;

class Translator_Exceptions_Test extends TranslatorBaseCase
{
    public function test1()
    {
        $this->expectException(LanguageAlreadyPresent::class);
        $this->setupTranslatorLanguages('it', 'en');
        $this->translator->addLanguage('en');
    }

    public function test2()
    {
        $this->expectException(LanguageAlreadyPresent::class);
        $this->setupTranslatorLanguages('it', 'en');

        $this->translator->addLanguage('ro');

        $this->translator->addLanguage('ro');
    }

    public function test3()
    {
        $this->expectException(LanguagePathNotDefined::class);

        $this->translator = new TranslatorMock();
        $this->translator->addLanguage('en');
    }

    public function test4()
    {
        $this->expectException(LanguageLocaleNotExists::class);

        $this->translator = new TranslatorMock();
        $this->translator->_('test', null, null, 'no-language');
    }

    public function testPath()
    {
        $this->expectException(Misusage::class);
        $this->setupTranslatorLanguages('it', 'en');
        $this->translator->setTranslationsPath('test');
    }

    public function testNamespace1()
    {
        $this->expectException(LanguageNamespaceMisuse::class);
        $this->setupTranslatorLanguages('it', 'en');
        $this->translator->useFilenameAsNamespace(true);
    }

    public function testNamespace2()
    {
        $this->expectException(LanguageNamespaceMisuse::class);
        $this->setupTranslatorLanguages('it', 'en');
        $this->translator->setNamespacePriority('test');
    }
}
