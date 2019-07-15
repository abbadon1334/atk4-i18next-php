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

Processor constructor.



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

    mixed|void I18Next\Locale\Processor::getKeyNamespace(key)





* Visibility: **private**


#### Arguments
* key **mixed**



### getCountFromParameters

    int|null I18Next\Locale\Processor::getCountFromParameters(array|null parameters)





* Visibility: **private**


#### Arguments
* parameters **array|null**



### getContextFromParameters

    string|null I18Next\Locale\Processor::getContextFromParameters(array|null parameters, string|null context)





* Visibility: **private**


#### Arguments
* parameters **array|null**
* context **string|null**



### getNamespaceFromParameters

    mixed|null I18Next\Locale\Processor::getNamespaceFromParameters(array|null parameters)





* Visibility: **private**


#### Arguments
* parameters **array|null**



### processKeyForNamespaces

    string I18Next\Locale\Processor::processKeyForNamespaces(string key, string|null keyNamespaceFromParameters)





* Visibility: **private**


#### Arguments
* key **string**
* keyNamespaceFromParameters **string|null**


