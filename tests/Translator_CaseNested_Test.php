<?php

namespace I18Next\Tests;

class Translator_CaseNested_Test extends TranslatorBaseTestCase
{
    public function test()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('nesting1');
        $this->assertEquals('1 2 3', $result);
    }
}
