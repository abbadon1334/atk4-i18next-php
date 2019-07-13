I18Next\Translator
===============






* Class name: Translator
* Namespace: I18Next
* This class implements: [I18Next\TranslatorInterface](I18Next-TranslatorInterface.md)




Properties
----------


### $locales

    private \I18Next\Locale[] $locales = []





* Visibility: **private**


### $language

    private string $language





* Visibility: **private**


### $fallback

    private string $fallback





* Visibility: **private**


### $translations_path

    private string $translations_path





* Visibility: **private**


### $loader_format

    private string $loader_format = json





* Visibility: **private**


### $namespace_priority

    private string[] $namespace_priority = []





* Visibility: **private**


### $use_filename_as_namespace

    private bool $use_filename_as_namespace = false





* Visibility: **private**


Methods
-------


### setTranslationsPath

    mixed I18Next\Translator::setTranslationsPath(path)

Set the root path of locales folder.



* Visibility: **public**


#### Arguments
* path **mixed**



### setNamespacePriority

    mixed I18Next\Translator::setNamespacePriority(mixed namespace_priority)

Set namespace priority.



* Visibility: **public**


#### Arguments
* namespace_priority **mixed**



### useFilenameAsNamespace

    mixed I18Next\Translator::useFilenameAsNamespace(bool|null enabled)

Set if filenames will be used as namespaces.



* Visibility: **public**


#### Arguments
* enabled **bool|null**



### setLanguagePrimary

    mixed I18Next\Translator::setLanguagePrimary(string language_code)

Set Primary Language.



* Visibility: **public**


#### Arguments
* language_code **string**



### addLanguage

    mixed I18Next\Translator::addLanguage(string code)

Add Extra languages.



* Visibility: **public**


#### Arguments
* code **string**



### setLanguageFallback

    mixed I18Next\Translator::setLanguageFallback(string fallback_code)

Set fallback language.



* Visibility: **public**


#### Arguments
* fallback_code **string**



### _

    string I18Next\TranslatorInterface::_(string key, array|null parameters, string|null context, string|null locale)

Translates the given message.



* Visibility: **public**
* This method is defined by [I18Next\TranslatorInterface](I18Next-TranslatorInterface.md)


#### Arguments
* key **string**
* parameters **array|null** - &lt;p&gt;Array of parameters used to translate message&lt;/p&gt;
* context **string|null** - &lt;p&gt;The context of the request&lt;/p&gt;
* locale **string|null** - &lt;p&gt;The locale or null to use the default&lt;/p&gt;



### getLocale

    mixed I18Next\Translator::getLocale(string locale)





* Visibility: **private**


#### Arguments
* locale **string**


