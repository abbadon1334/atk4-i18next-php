<?php

namespace I18Next\Tests;

class Translator_CasePlural_Test extends TranslatorBaseTestCase
{
    public function test0_int()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key', ['count' => 0]);
        $this->assertEquals('zero', $result);
    }

    public function test1_int()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key', ['count' => 1]);
        $this->assertEquals('one', $result);
    }

    public function test2_int()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key', ['count' => 2]);
        $this->assertEquals('two', $result);
    }

    public function test6_int()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('key', ['count' => 6]);
        $this->assertEquals('other', $result);
    }
}
