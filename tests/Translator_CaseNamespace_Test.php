<?php

namespace I18Next\Tests;

class Translator_CaseNamespace_Test extends TranslatorBaseTestCase
{
    public function testPriority1()
    {
        $this->translator->setNamespacePriority('namespace1', 'namespace2', 'namespace3');
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('nskey');
        $this->assertEquals('namespace1 chiave', $result);
    }

    public function testPriority2()
    {
        $this->translator->setNamespacePriority('namespace2', 'namespace1', 'namespace3');
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('nskey');
        $this->assertEquals('namespace2 chiave', $result);
    }

    public function testPriority3()
    {
        $this->translator->setNamespacePriority('namespace3', 'namespace1', 'namespace3');
        $this->setupTranslatorLanguages('it', 'en');

        $result = $this->translator->_('nskey');
        $this->assertEquals('namespace3 chiave', $result);
    }

    public function testNoPriorityReturningKey()
    {
        $this->translator->useFilenameAsNamespace(true);
        //$this->translator->setNamespacePriority('namespace3','namespace1','namespace3');
        $this->setupTranslatorLanguages('it', 'en');
        $result = $this->translator->_('nskey');
        $this->assertEquals('nskey', $result);
    }

    public function testNoPriorityWithprefixedNamespace()
    {
        $this->translator->useFilenameAsNamespace(true);
        //$this->translator->setNamespacePriority('namespace3','namespace1','namespace3');
        $this->setupTranslatorLanguages('it', 'en');
        $result = $this->translator->_('namespace3:nskey');
        $this->assertEquals('namespace3 chiave', $result);
    }

    public function testNoPriorityWithprefixedNamespaceNoFallbackLanguage()
    {
        $this->translator->useFilenameAsNamespace(true);
        //$this->translator->setNamespacePriority('namespace3','namespace1','namespace3');
        $this->setupTranslatorLanguages('en');
        $result = $this->translator->_('namespace3:nskey');
        $this->assertEquals('namespace3 key', $result);
    }
}
