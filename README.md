# PHP Language library
#### Based on i18next http://i18next.com
#### Interpolate direct with ATk4 - Agile Toolkit Models https://www.agiletoolkit.org/

[![Build Status](https://travis-ci.org/abbadon1334/atk4-i18next-php.svg?branch=master)](https://travis-ci.org/abbadon1334/atk4-i18next-php)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/3936f18bcf2d47c38713dc49dc4cd44b)](https://www.codacy.com/app/abbadon1334/atk4-i18next-php?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abbadon1334/atk4-i18next-php&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/3936f18bcf2d47c38713dc49dc4cd44b)](https://www.codacy.com/app/abbadon1334/atk4-i18next-php?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abbadon1334/atk4-i18next-php&amp;utm_campaign=Badge_Coverage)
[![Coverage Status](https://coveralls.io/repos/github/abbadon1334/atk4-i18next-php/badge.svg?branch=master)](https://coveralls.io/github/abbadon1334/atk4-i18next-php?branch=master)
[![StyleCI](https://github.styleci.io/repos/196214699/shield?branch=master)](https://github.styleci.io/repos/196214699)
[![Maintainability](https://api.codeclimate.com/v1/badges/6aa647f7e846726e4f89/maintainability)](https://codeclimate.com/github/abbadon1334/atk4-i18next-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/6aa647f7e846726e4f89/test_coverage)](https://codeclimate.com/github/abbadon1334/atk4-i18next-php/test_coverage)

install with composer :

`composer require abbadon1334/atk4-i18next-php`

All documentation about the original library can be found here : http://i18next.com/

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

## Support I18Next
#####  http://i18next.com

- [x] load json files by folder, every folder is a language code
- [x] get a defined translation in primary language
    - [x] if not found try in fallback language
        - [x] if not found return original string
- [x] Namespaces             
    - [x] get defined translation based on prioritized fallback namespaces
- [x] Context as {key}_{context}
- [x] Plurals
    - [x] singular as {key}
    - [x] plurals as {key}_plural
    - [x] multiple plurals as {key}_{int $counter}
        - [x] manage when $counter is bigger than max defined plurals
- [x] Interpolate        
    - [x] Replace {{key}} with defined $paramater value
        - [x] if {{key}} has a point like {{key.index}} and $parameters[index] is an array or object will retrive the value
- [x] Nesting 
    - [x] Basic
    - [x] Plurals
- [ ] Formatting

## Support ATK4 - Agile Toolkit Model
##### https://www.agiletoolkit.org

- [x] Interpolate with \atk4\data\Model