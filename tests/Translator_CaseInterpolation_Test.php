<?php

namespace I18Next\Tests;

class Translator_CaseInterpolation_Test extends TranslatorBaseCase
{
    public function test()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('nesting1');
        $this->assertEquals('1 2 3', $result);
    }
}
