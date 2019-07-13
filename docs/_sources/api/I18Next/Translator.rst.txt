.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Translator
==========


.. php:namespace:: I18Next

.. php:class:: Translator


	:Source:
		`src/I18Next/Translator.php#14 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L14>`_
	
	:Implements:
		:php:interface:`I18Next\\TranslatorInterface` 
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public setTranslationsPath\($path\)<I18Next\\Translator::setTranslationsPath\(\)>`
* :php:meth:`public setNamespacePriority\($namespace\_priority\)<I18Next\\Translator::setNamespacePriority\(\)>`
* :php:meth:`public useFilenameAsNamespace\($enabled\)<I18Next\\Translator::useFilenameAsNamespace\(\)>`
* :php:meth:`public setLanguagePrimary\($language\_code\)<I18Next\\Translator::setLanguagePrimary\(\)>`
* :php:meth:`public addLanguage\($code\)<I18Next\\Translator::addLanguage\(\)>`
* :php:meth:`public setLanguageFallback\($fallback\_code\)<I18Next\\Translator::setLanguageFallback\(\)>`
* :php:meth:`public \_\($key, $parameters, $context, $locale\)<I18Next\\Translator::\_\(\)>`
* :php:meth:`private getLocale\($locale\)<I18Next\\Translator::getLocale\(\)>`


Properties
----------

Methods
-------

.. rst-class:: public

	.. php:method:: public setTranslationsPath( $path)
	
		.. rst-class:: phpdoc-description
		
			| Set the root path of locales folder\.
			
		
		:Source:
			`src/I18Next/Translator.php#45 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L45>`_
		
		
		:Parameters:
			* **$path**  

		
		:Throws: :any:`\\I18Next\\Exception\\Misusage <I18Next\\Exception\\Misusage>` 
	
	

.. rst-class:: public

	.. php:method:: public setNamespacePriority( ...$namespace_priority)
	
		.. rst-class:: phpdoc-description
		
			| Set namespace priority\.
			
		
		:Source:
			`src/I18Next/Translator.php#63 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L63>`_
		
		
		:Parameters:
			* **...$namespace_priority** (mixed)  

		
		:Throws: :any:`\\I18Next\\Exception\\LanguageNamespaceMisuse <I18Next\\Exception\\LanguageNamespaceMisuse>` 
	
	

.. rst-class:: public

	.. php:method:: public useFilenameAsNamespace( $enabled)
	
		.. rst-class:: phpdoc-description
		
			| Set if filenames will be used as namespaces\.
			
		
		:Source:
			`src/I18Next/Translator.php#79 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L79>`_
		
		
		:Parameters:
			* **$enabled** (bool | null)  

		
		:Throws: :any:`\\I18Next\\Exception\\LanguageNamespaceMisuse <I18Next\\Exception\\LanguageNamespaceMisuse>` 
	
	

.. rst-class:: public

	.. php:method:: public setLanguagePrimary( $language_code)
	
		.. rst-class:: phpdoc-description
		
			| Set Primary Language\.
			
		
		:Source:
			`src/I18Next/Translator.php#97 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L97>`_
		
		
		:Parameters:
			* **$language_code** (string)  

		
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguageAlreadyPresent <I18Next\\Exception\\LanguageAlreadyPresent>` 
		:Throws: :any:`\\I18Next\\Exception\\LanguagePathNotDefined <I18Next\\Exception\\LanguagePathNotDefined>` 
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public addLanguage( $code)
	
		.. rst-class:: phpdoc-description
		
			| Add Extra languages\.
			
		
		:Source:
			`src/I18Next/Translator.php#112 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L112>`_
		
		
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
	
	

.. rst-class:: public

	.. php:method:: public setLanguageFallback( $fallback_code)
	
		.. rst-class:: phpdoc-description
		
			| Set fallback language\.
			
		
		:Source:
			`src/I18Next/Translator.php#138 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L138>`_
		
		
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
	
	

.. rst-class:: public

	.. php:method:: public _( $key, $parameters=null, $context=null, $locale=null)
	
		.. rst-class:: phpdoc-description
		
			| \{@inheritdoc\}
			
		
		:Source:
			`src/I18Next/Translator.php#147 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Translator.php#L147>`_
		
		
	
	

