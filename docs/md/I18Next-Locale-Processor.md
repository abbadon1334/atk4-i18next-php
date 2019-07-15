I18Next\Locale\Processor
===============






* Class name: Processor
* Namespace: I18Next\Locale





Properties
----------


### $translations

    private \I18Next\Locale\Translations $translations





* Visibility: **private**


### $processorKey

    private \I18Next\Locale\Key $processorKey





* Visibility: **private**


### $processorValue

    private \I18Next\Locale\Value $processorValue





* Visibility: **private**


Methods
-------


### __construct

    mixed I18Next\Locale\Processor::__construct(\I18Next\Locale\Translations translations)





* Visibility: **public**


#### Arguments
* translations **[I18Next\Locale\Translations](I18Next-Locale-Translations.md)**



### process

    string|null I18Next\Locale\Processor::process(string key, array|null parameters, string|null context)





* Visibility: **public**


#### Arguments
* key **string**
* parameters **array|null**
* context **string|null**



### getKeyNamespace

    mixed I18Next\Locale\Processor::getKeyNamespace(key)





* Visibility: **private**


#### Arguments
* key **mixed**



### getCountFromParameters

    mixed I18Next\Locale\Processor::getCountFromParameters(?array parameters)





* Visibility: **private**


#### Arguments
* parameters **?array**



### getContextFromParameters

    mixed I18Next\Locale\Processor::getContextFromParameters(?array parameters, ?string context)





* Visibility: **private**


#### Arguments
* parameters **?array**
* context **?string**



### getNamespaceFromParameters

    mixed I18Next\Locale\Processor::getNamespaceFromParameters(?array parameters)





* Visibility: **private**


#### Arguments
* parameters **?array**



### processKeyForNamespaces

    mixed I18Next\Locale\Processor::processKeyForNamespaces(string key, ?string keyNamespaceFromParameters)





* Visibility: **private**


#### Arguments
* key **string**
* keyNamespaceFromParameters **?string**


