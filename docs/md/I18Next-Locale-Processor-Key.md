I18Next\Locale\Processor\Key
===============






* Class name: Key
* Namespace: I18Next\Locale\Processor
* Parent class: [I18Next\Locale\Processor\AbstractProcessor](I18Next-Locale-Processor-AbstractProcessor.md)





Properties
----------


### $translations

    protected \I18Next\Locale\Processor\Translations $translations





* Visibility: **protected**


Methods
-------


### processKey

    string|null I18Next\Locale\Processor\Key::processKey(string key, string|null context, int|null counter)





* Visibility: **public**


#### Arguments
* key **string**
* context **string|null**
* counter **int|null**



### processDirectPipedKey

    mixed I18Next\Locale\Processor\Key::processDirectPipedKey(key, ?int counter)





* Visibility: **private**


#### Arguments
* key **mixed**
* counter **?int**



### processWithCounter

    mixed|null I18Next\Locale\Processor\Key::processWithCounter(string key, int|null counter)





* Visibility: **private**


#### Arguments
* key **string**
* counter **int|null**



### process

    mixed|null I18Next\Locale\Processor\Key::process(key)





* Visibility: **private**


#### Arguments
* key **mixed**



### processWithNamespaceWithCounter

    mixed|null I18Next\Locale\Processor\Key::processWithNamespaceWithCounter(string key, int|null counter)





* Visibility: **private**


#### Arguments
* key **string**
* counter **int|null**



### processWithNamespace

    mixed|null I18Next\Locale\Processor\Key::processWithNamespace(key)





* Visibility: **private**


#### Arguments
* key **mixed**



### getKeyNamespace

    string|null I18Next\Locale\Processor\Key::getKeyNamespace(key)





* Visibility: **private**


#### Arguments
* key **mixed**



### getOnlyKeyFromNamespacedKey

    bool|string I18Next\Locale\Processor\Key::getOnlyKeyFromNamespacedKey(key, namespace)





* Visibility: **private**


#### Arguments
* key **mixed**
* namespace **mixed**



### __construct

    mixed I18Next\Locale\Processor\AbstractProcessor::__construct(\I18Next\Locale\Processor\Translations translations)

AbstractProcessor constructor.



* Visibility: **public**
* This method is defined by [I18Next\Locale\Processor\AbstractProcessor](I18Next-Locale-Processor-AbstractProcessor.md)


#### Arguments
* translations **I18Next\Locale\Processor\Translations**


