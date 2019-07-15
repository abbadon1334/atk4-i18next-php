I18Next\Locale\Processor\Value
===============






* Class name: Value
* Namespace: I18Next\Locale\Processor
* Parent class: [I18Next\Locale\Processor\AbstractProcessor](I18Next-Locale-Processor-AbstractProcessor.md)





Properties
----------


### $translations

    protected \I18Next\Locale\Processor\Translations $translations





* Visibility: **protected**


Methods
-------


### processValue

    string|null I18Next\Locale\Processor\Value::processValue(string|null found_key, array|null parameters)





* Visibility: **public**


#### Arguments
* found_key **string|null**
* parameters **array|null**



### processValueInterpolate

    mixed|string I18Next\Locale\Processor\Value::processValueInterpolate(string found_key, array|null parameters)





* Visibility: **private**


#### Arguments
* found_key **string**
* parameters **array|null**



### processValueReplaceParameter

    mixed|string I18Next\Locale\Processor\Value::processValueReplaceParameter(string found_key, index, parameters)





* Visibility: **private**


#### Arguments
* found_key **string**
* index **mixed**
* parameters **mixed**



### processValueNested

    mixed I18Next\Locale\Processor\Value::processValueNested(string found_key, array parameters)





* Visibility: **private**


#### Arguments
* found_key **string**
* parameters **array**



### __construct

    mixed I18Next\Locale\Processor\AbstractProcessor::__construct(\I18Next\Locale\Processor\Translations translations)

AbstractProcessor constructor.



* Visibility: **public**
* This method is defined by [I18Next\Locale\Processor\AbstractProcessor](I18Next-Locale-Processor-AbstractProcessor.md)


#### Arguments
* translations **I18Next\Locale\Processor\Translations**


