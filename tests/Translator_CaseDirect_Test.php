<?php

namespace I18Next\Tests;

class Translator_CaseDirect_Test extends TranslatorBaseCase
{
    public function testDirectPipe1()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('friend|friends', ['count' => 1]);
        $this->assertEquals('friend', $result);
    }

    public function testDirectPipe3()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('friend|friends', ['count' => 3]);
        $this->assertEquals('friends', $result);
    }

    public function testDirectPipe4()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('i have a friend|i have {{count}} friends', ['count' => 3]);
        $this->assertEquals('i have 3 friends', $result);
    }
}
