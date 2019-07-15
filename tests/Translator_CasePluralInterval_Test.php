<?php

namespace I18Next\Tests;

use I18Next\Exception\TranslationSyntaxError;
use I18Next\Translator;

class Translator_CasePluralInterval_Test extends TranslatorBaseCase
{
    /**
     * Testing this :
     * "key4_interval": "(1){one item};(2-7){a few items};(7-inf){a lot of items};"
     *
     * "key4_interval": "(1){one item};(2-7){a few items};(7-inf){a lot of items};"
     */

    public function testNoCount()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key4');
        $this->assertEquals('one item', $result);
    }

    public function testCount0()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key4', ['count' => 0]);
        $this->assertEquals('key4', $result);
    }

    public function testCount1()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key4', ['count' => 1]);
        $this->assertEquals('one item', $result);
    }

    public function testCount3()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key4', ['count' => 3]);
        $this->assertEquals('a few items', $result);
    }

    public function testCount8()
    {
        $this->setupTranslatorLanguages('en');

        $result = $this->translator->_('key4', ['count' => 8]);
        $this->assertEquals('a lot of items', $result);
    }

    public function testException1()
    {
        $this->expectException(TranslationSyntaxError::class);

        $path = '/tmp/locale_exception';
        @mkdir($path . '/en', 0777, true);

        file_put_contents(
            $path . '/en/exception.json',
            json_encode(["key4_interval" => "(1){one item};2-7){a few items};(7-inf){a lot of items};"])
        );

        $this->translator = new Translator();
        $this->translator->setTranslationsPath($path);
        $this->translator->setLanguagePrimary('en');
    }

    public function testException2()
    {
        $this->expectException(TranslationSyntaxError::class);

        $path = '/tmp/locale_exception';
        @mkdir($path . '/en', 0777, true);

        file_put_contents(
            $path . '/en/exception.json',
            json_encode(["key4_interval" => "(1){one item};(2-7){a few items};(7-inf){a lot of items}"])
        );

        $this->translator = new Translator();
        $this->translator->setTranslationsPath($path);
        $this->translator->setLanguagePrimary('en');
    }

    public function testException3()
    {
        $this->expectException(TranslationSyntaxError::class);

        $path = '/tmp/locale_exception';
        @mkdir($path . '/en', 0777, true);

        file_put_contents(
            $path . '/en/exception.json',
            json_encode(["key4_interval" => "(1){one item};"])
        );

        $this->translator = new Translator();
        $this->translator->setTranslationsPath($path);
        $this->translator->setLanguagePrimary('en');
    }
}
