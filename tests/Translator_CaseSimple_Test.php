<?php

namespace I18Next\Tests;

class Translator_CaseSimple_Test extends TranslatorBaseCase
{
    public function testNoFallback()
    {
        $this->setupTranslatorLanguages('it');

        $result = $this->translator->_('friend');
        $this->assertEquals('Un conoscente', $result);

        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('friend');
        $this->assertEquals('A friend', $result);
    }

    public function testFallback()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('friend');
        $this->assertEquals('Un conoscente', $result);
    }

    public function testFallback2()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('key');
        $this->assertEquals('una chiave', $result);
    }

    public function testNotFound()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('not_found_key');
        $this->assertEquals('not_found_key', $result);
    }

    public function testNotFound2()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('not.found.key');
        $this->assertEquals('not.found.key', $result);
    }
}
