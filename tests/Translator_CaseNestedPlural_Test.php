<?php

namespace I18Next\Tests;

class Translator_CaseNestedPlural_Test extends TranslatorBaseCase
{
    public function test()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('girlsAndBoys', ['count' => 1, 'girls' => 1]);
        $this->assertEquals('1 girl and 1 boy', $result);
    }

    public function test1()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('girlsAndBoys', ['count' => 2, 'girls' => 2]);
        $this->assertEquals('2 girls and 2 boys', $result);
    }

    public function test2_outOfRangeCounters()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('girlsAndBoys', ['count' => 20, 'girls' => 10]);
        $this->assertEquals('10 girls and 20 boys', $result);
    }
}
