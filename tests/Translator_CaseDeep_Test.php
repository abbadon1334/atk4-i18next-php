<?php

namespace I18Next\Tests;

class Translator_CaseDeep_Test extends TranslatorBaseCase
{
    public function testDeep()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('key_deep.deep.deep');
        $this->assertEquals('chiave deep', $result);
    }

    public function testDeepInline()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('key_inline.deep.inline');
        $this->assertEquals('chiave deep in linea', $result);
    }
}
