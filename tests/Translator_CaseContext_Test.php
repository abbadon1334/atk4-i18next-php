<?php

namespace I18Next\Tests;

class Translator_CaseContext_Test extends TranslatorBaseCase
{
    public function test()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('friend', [], 'female');
        $this->assertEquals("Un'amica", $result);
    }
}
