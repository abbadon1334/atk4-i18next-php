<?php

namespace I18Next\Tests;

use I18Next\Exception\LanguageAlreadyPresent;
use I18Next\Exception\LanguageLocaleNotExists;
use I18Next\Exception\LanguagePathNotDefined;

class Translator_Exceptions_Test extends TranslatorBaseTestCase
{
    public function test()
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
        $this->translator->_('test', NULL, NULL, 'no-language');
    }
}
