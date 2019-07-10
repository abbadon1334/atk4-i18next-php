<?php

namespace I18Next\Tests;

class Translator_CaseContextAndPlural_Test extends TranslatorBaseTestCase
{
    public function testContext()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('friend', ['count' => 2], 'female');
        $this->assertEquals("amiche", $result);
    }
}
