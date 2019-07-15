<?php

namespace I18Next;

use PHPUnit\Framework\TestCase;

/**
 * Class TranslatorStatic_Test.
 *
 * @runTestsInSeparateProcesses
 */
class TranslatorStatic_Test extends TestCase
{
    public $path = __DIR__.'/data/locales';

    protected function setUp(): void
    {
        TranslatorStatic::setTranslationsPath($this->path);
        $this->addToAssertionCount(1);
    }

    /*
    public function testSetTranslationsPath()
    {

    }
    */

    public function testSetLanguagePrimary()
    {
        TranslatorStatic::setLanguagePrimary('it');
        $this->addToAssertionCount(1);
    }

    public function testSetNamespacePriority()
    {
        TranslatorStatic::setNamespacePriority('namespace1', 'namespace2', 'namespace3');
        $this->addToAssertionCount(1);
    }

    public function testAddLanguage()
    {
        TranslatorStatic::addLanguage('ro');
        $this->addToAssertionCount(1);
    }

    public function testSetLanguageFallback()
    {
        TranslatorStatic::setLanguageFallback('en');
        $this->addToAssertionCount(1);
    }

    public function testUseFilenameAsNamespace()
    {
        TranslatorStatic::useFilenameAsNamespace(true);
        $this->addToAssertionCount(1);

        TranslatorStatic::useFilenameAsNamespace(false);
        $this->addToAssertionCount(1);
    }

    public function testRegister()
    {
        TranslatorStatic::register();
        $this->addToAssertionCount(1);
    }

    public function test_Translations()
    {
        TranslatorStatic::setLanguagePrimary('it');
        TranslatorStatic::setLanguageFallback('en');
        TranslatorStatic::addLanguage('ro');
        $result = TranslatorStatic::_('friend');
        $this->assertEquals('Un conoscente', $result);
    }

    public function test_Translations_global()
    {
        TranslatorStatic::setLanguagePrimary('it');
        TranslatorStatic::setLanguageFallback('en');
        TranslatorStatic::addLanguage('ro');

        TranslatorStatic::register();

        $result = __('friend');
        $this->assertEquals('Un conoscente', $result);
    }
}
