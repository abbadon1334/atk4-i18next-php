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

    private \I18Next\Locale\Processor\Key $processorKey





* Visibility: **private**


### $processorValue

    private \I18Next\Locale\Processor\Value $processorValue





* Visibility: **private**


Methods
-------


### __construct

    mixed I18Next\Locale\Processor::__construct(translations)





* Visibility: **public**


#### Arguments
* translations **mixed**



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

    mixed I18Next\Locale\Processor::getCountFromParameters(parameters)





* Visibility: **private**


#### Arguments
* parameters **mixed**



### getContextFromParameters

    mixed I18Next\Locale\Processor::getContextFromParameters(parameters, context)





* Visibility: **private**


#### Arguments
* parameters **mixed**
* context **mixed**



### getNamespaceFromParameters

    mixed I18Next\Locale\Processor::getNamespaceFromParameters(parameters)





* Visibility: **private**


#### Arguments
* parameters **mixed**



### processKeyForNamespaces

    mixed I18Next\Locale\Processor::processKeyForNamespaces(key, keyNamespaceFromParameters)





* Visibility: **private**


#### Arguments
* key **mixed**
* keyNamespaceFromParameters **mixed**


