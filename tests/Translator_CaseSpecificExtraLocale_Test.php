<?php

namespace I18Next\Tests;

class Translator_CaseSpecificExtraLocale_Test extends TranslatorBaseCase
{
    public function test()
    {
        $this->setupTranslatorLanguages('it', 'en');
        $this->translator->addLanguage('ro');

        $result = $this->translator->_('test_other_language_single_key', null, null, 'ro');
        $this->assertEquals('alta limba', $result);
    }
}
