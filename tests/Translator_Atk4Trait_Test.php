<?php

namespace I18Next\Tests;

use atk4\core\AppScopeTrait;
use atk4\core\ContainerTrait;
use atk4\core\Exception;
use atk4\core\InitializerTrait;
use I18Next\atk4\TranslatorI18NextTrait;

class Translator_Atk4Trait_Test extends TranslatorBaseCase
{
    public function testBase()
    {
        $this->setupTranslatorLanguages('it', 'en');

        $app = new ATK4AppScopeMock();
        $app->setTranslator($this->translator);

        $result = $app->_('friend');
        $this->assertEquals('Un conoscente', $result);

        $app->add($child = new ATK4ChildMock());

        $result = $child->_('friend', null, null, 'en');
        $this->assertEquals('A friend', $result);

        $this->translator->addLanguage('ro');

        $result = $child->_('friend', null, null, 'ro');
        $this->assertEquals('Un prieten', $result);
    }

    public function testException()
    {
        $this->expectException(Exception::class);
        $app = new ATK4AppScopeMock();
        $app->_('friend');
    }
}

// @codingStandardsIgnoreStart
class ATK4AppScopeMock
{
    use AppScopeTrait;
    use ContainerTrait;
    use TranslatorI18NextTrait;

    public function __construct()
    {
        $this->app = $this;
    }
}

class ATK4ChildMock
{
    use AppScopeTrait;
    use InitializerTrait;

    // simulate the PR TranslatableTrait
    public function _($message, ?array $parameters = null, ?string $domain = null, ?string $locale = null): string
    {
        if (isset($this->app) && method_exists($this->app, '_')) {
            return $this->app->_($message, $parameters, $domain, $locale);
        }

        throw new Exception('App not recognized, something went wrong with simulation of TranslatableTrait');
    }
}
// @codingStandardsIgnoreEnd
