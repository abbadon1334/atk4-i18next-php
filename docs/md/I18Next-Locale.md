I18Next\Locale
===============






* Class name: Locale
* Namespace: I18Next





Properties
----------


### $code

    private string $code





* Visibility: **private**


### $processor

    private \I18Next\Processor $processor





* Visibility: **private**


### $translations

    private \I18Next\Translations $translations





* Visibility: **private**


Methods
-------


### __construct

    mixed I18Next\Locale::__construct(string code)

Locale constructor.



* Visibility: **public**


#### Arguments
* code **string**



### load

    mixed I18Next\Locale::load(string path, bool use_filename_as_namespace, string|null namespace_priority)





* Visibility: **public**


#### Arguments
* path **string**
* use_filename_as_namespace **bool**
* namespace_priority **string|null**



### process

    string|null I18Next\Locale::process(string key, array|null parameters, string|null context)





* Visibility: **public**


#### Arguments
* key **string**
* parameters **array|null**
* context **string|null**



### setLoaderFormat

    mixed I18Next\Locale::setLoaderFormat(string format)





* Visibility: **public**


#### Arguments
* format **string**


