# PHP Language library
#### Based on i18next http://i18next.com
#### Interpolate direct with ATK4 - Agile Toolkit Models https://www.agiletoolkit.org/

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

- [x] Read translations files from folder, every folder is a language code
    - [x] JSON
    - [ ] YAML
    - [ ] PHP Array
- [ ] Write translations files to a folder, every folder is a language code
    - [ ] JSON
    - [ ] YAML
    - [ ] PHP Array
- [x] Get a defined translation in primary language
    - [x] If not found try in fallback language
        - [x] If not found return original string
- [x] Namespaces
    - [x] Get defined translation based on prioritized fallback namespaces
- [x] Context as {key}_{context}
- [x] Plurals
    - [x] Singular as {key}
    - [x] Plurals as {key}_plural
    - [x] Multiple plurals as {key}_{int $counter}
        - [x] Manage when $counter is bigger than max defined plurals
    - [x] Nested interpolate plurals
    - [x] Intervals
- [x] Interpolate        
    - [x] Replace {{key}} with defined $paramater value
        - [x] If {{key}} has a point like {{key.index}} and $parameters[index] is an array or object will retrive the value
- [x] Nesting 
    - [x] Basic
    - [x] Plurals
- [ ] Formatting
- [ ] Adding Helper for use method Translator::_ as global functions _
- [ ] Adding Helper for use Translator as a global singleton instance
- [ ] Collect missing requested keys
- [ ] Adding Helper for search/collect calls to method Translator _ in code
- [x] Added direct translations using key as translation    

## Support ATK4 - Agile Toolkit Model
##### https://www.agiletoolkit.org

- [x] Interpolate with \atk4\data\Model