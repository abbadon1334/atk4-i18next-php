.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


TranslatorStatic
================


.. php:namespace:: I18Next

.. rst-class::  final

.. php:class:: TranslatorStatic


	:Source:
		`src/I18Next/TranslatorStatic.php#13 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L13>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public static instance\(\)<I18Next\\TranslatorStatic::instance\(\)>`
* :php:meth:`public static setTranslationsPath\($path\)<I18Next\\TranslatorStatic::setTranslationsPath\(\)>`
* :php:meth:`public static setNamespacePriority\($namespace\_priority\)<I18Next\\TranslatorStatic::setNamespacePriority\(\)>`
* :php:meth:`public static useFilenameAsNamespace\($enabled\)<I18Next\\TranslatorStatic::useFilenameAsNamespace\(\)>`
* :php:meth:`public static setLanguagePrimary\($language\_code\)<I18Next\\TranslatorStatic::setLanguagePrimary\(\)>`
* :php:meth:`public static addLanguage\($code\)<I18Next\\TranslatorStatic::addLanguage\(\)>`
* :php:meth:`public static setLanguageFallback\($fallback\_code\)<I18Next\\TranslatorStatic::setLanguageFallback\(\)>`
* :php:meth:`public static \_\($key, $parameters, $context, $locale\)<I18Next\\TranslatorStatic::\_\(\)>`
* :php:meth:`public static register\(\)<I18Next\\TranslatorStatic::register\(\)>`


Properties
----------

Methods
-------

.. rst-class:: public static

	.. php:method:: public static instance()
	
		:Source:
			`src/I18Next/TranslatorStatic.php#18 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L18>`_
		
		
	
	

.. rst-class:: public static

	.. php:method:: public static setTranslationsPath( $path)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#32 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L32>`_
		
		
		:Parameters:
			* **$path** (string)  

		
		:Throws: :any:`\\I18Next\\Exception\\Misusage <I18Next\\Exception\\Misusage>` 
	
	

.. rst-class:: public static

	.. php:method:: public static setNamespacePriority( ...$namespace_priority)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#42 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L42>`_
		
		
		:Parameters:
			* **...$namespace_priority** (mixed)  

		
		:Throws: :any:`\\I18Next\\Exception\\LanguageNamespaceMisuse <I18Next\\Exception\\LanguageNamespaceMisuse>` 
	
	

.. rst-class:: public static

	.. php:method:: public static useFilenameAsNamespace( $enabled)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#52 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L52>`_
		
		
		:Parameters:
			* **$enabled** (bool | null)  

		
		:Throws: :any:`\\I18Next\\Exception\\LanguageNamespaceMisuse <I18Next\\Exception\\LanguageNamespaceMisuse>` 
	
	

.. rst-class:: public static

	.. php:method:: public static setLanguagePrimary( $language_code)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#64 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L64>`_
		
		
		:Parameters:
			* **$language_code** (string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
	
	

.. rst-class:: public static

	.. php:method:: public static addLanguage( $code)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#76 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L76>`_
		
		
		:Parameters:
			* **$code** (string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
	
	

.. rst-class:: public static

	.. php:method:: public static setLanguageFallback( $fallback_code)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#88 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L88>`_
		
		
		:Parameters:
			* **$fallback_code** (string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
	
	

.. rst-class:: public static

	.. php:method:: public static _( $key, $parameters=null, $context=null, $locale=null)
	
		:Source:
			`src/I18Next/TranslatorStatic.php#101 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L101>`_
		
		
		:Parameters:
			* **$key** (string)  
			* **$parameters** (array | null)  
			* **$context** (string | null)  
			* **$locale** (string | null)  

		
		:Returns: string 
	
	

.. rst-class:: public static

	.. php:method:: public static register()
	
		.. rst-class:: phpdoc-description
		
			| Register global function \_\.
			
		
		:Source:
			`src/I18Next/TranslatorStatic.php#109 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/TranslatorStatic.php#L109>`_
		
		
	
	

