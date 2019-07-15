I18Next\Locale\Translations
===============






* Class name: Translations
* Namespace: I18Next\Locale





Properties
----------


### $namespace_priority

    protected string[] $namespace_priority = []





* Visibility: **protected**


### $use_filename_as_namespace

    protected bool $use_filename_as_namespace = false





* Visibility: **protected**


### $loader_format

    private string $loader_format = json





* Visibility: **private**


### $loader_format_ext

    private string $loader_format_ext = json





* Visibility: **private**


Methods
-------


### load

    mixed I18Next\Locale\Translations::load(string path, bool use_filename_as_namespace, string|null namespace_priority)





* Visibility: **public**


#### Arguments
* path **string**
* use_filename_as_namespace **bool**
* namespace_priority **string|null**



### loadSingle

    array I18Next\Locale\Translations::loadSingle(string path)





* Visibility: **private**


#### Arguments
* path **string**



### useFilenameAsNamespace

    mixed I18Next\Locale\Translations::useFilenameAsNamespace(bool|null enabled)





* Visibility: **public**


#### Arguments
* enabled **bool|null**



### setNamespacePriority

    mixed I18Next\Locale\Translations::setNamespacePriority(string|null namespace_priority)





* Visibility: **private**


#### Arguments
* namespace_priority **string|null**



### processKeyVariation

    mixed I18Next\Locale\Translations::processKeyVariation(string processorClass, string key, value)





* Visibility: **private**


#### Arguments
* processorClass **string**
* key **string**
* value **mixed**



### afterReadProcessForKeyCounters

    mixed I18Next\Locale\Translations::afterReadProcessForKeyCounters()





* Visibility: **private**




### afterReadProcessForKeyDeepInline

    mixed I18Next\Locale\Translations::afterReadProcessForKeyDeepInline()





* Visibility: **private**




### afterReadAddNamespaceIfNeeded

    mixed I18Next\Locale\Translations::afterReadAddNamespaceIfNeeded(array config, string namespace)





* Visibility: **private**


#### Arguments
* config **array**
* namespace **string**



### useNamespaces

    bool I18Next\Locale\Translations::useNamespaces()





* Visibility: **public**




### getNamespaceRanked

    string[] I18Next\Locale\Translations::getNamespaceRanked()





* Visibility: **public**




### setLoaderFormat

    mixed I18Next\Locale\Translations::setLoaderFormat(string format)





* Visibility: **public**


#### Arguments
* format **string**


