.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php

Getting started
===============

### How to use :

```
$this->translator = new TranslatorMock();
$this->translator->setTranslationsPath(__DIR__.'/data/locales');
```

Define if filename will be used has namespace :
```
$this->translator->useFilenameAsNamespace(true);
```

Define primary and fallback language (name of the folders where library load files) :
```
$this->translator->setLanguagePrimary($language);
$this->translator->setLanguageFallback($fallback);
```

Add additional language :
```
$this->translator->addLanguage('it');
```

Translate :
```PHP

interface TranslatorInterface
{
    /**
     * Translates the given message.
     *
     * @param string      $key
     * @param array|null  $parameters Array of parameters used to translate message
     * @param string|null $context
     * @param string|null $locale     The locale or null to use the default
     *
     * @return string The translated string
     */
    public function _(string $key, ?array $parameters = null, ?string $context = null, ?string $locale = null): string;
}

// Usage

$result = $this->translator->_('definitionKey');

$result = $this->translator->_('definitionKey', ['param1' => 'test']);

$result = $this->translator->_('definitionKey', ['param1' => 'test'], 'context');

$result = $this->translator->_('definitionKey', ['param1' => 'test'], 'context', 'specificLanguage');

$result = $this->translator->_('namespace:definitionKey', ['param1' => 'test'], 'context', 'specificLanguage');
```