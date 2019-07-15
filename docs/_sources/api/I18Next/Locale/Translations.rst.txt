.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Translations
============


.. php:namespace:: I18Next\Locale

.. rst-class::  final

.. php:class:: Translations


	:Source:
		`src/I18Next/Locale/Translations.php#15 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L15>`_
	
	:Used traits:
		:php:trait:`atk4\\core\\ConfigTrait` 
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public load\($path, $use\_filename\_as\_namespace, $namespace\_priority\)<I18Next\\Locale\\Translations::load\(\)>`
* :php:meth:`public useFilenameAsNamespace\($enabled\)<I18Next\\Locale\\Translations::useFilenameAsNamespace\(\)>`
* :php:meth:`private setNamespacePriority\($namespace\_priority\)<I18Next\\Locale\\Translations::setNamespacePriority\(\)>`
* :php:meth:`private afterReadProcessForKeyCounters\(\)<I18Next\\Locale\\Translations::afterReadProcessForKeyCounters\(\)>`
* :php:meth:`private processForCounterKey\($key\_plural\_definition, $key, $value\)<I18Next\\Locale\\Translations::processForCounterKey\(\)>`
* :php:meth:`private processForIntervalKey\($key\_plural\_definition, $key, $value\)<I18Next\\Locale\\Translations::processForIntervalKey\(\)>`
* :php:meth:`private afterReadProcessForKeyDeepInline\(\)<I18Next\\Locale\\Translations::afterReadProcessForKeyDeepInline\(\)>`
* :php:meth:`private afterReadAddNamespaceIfNeeded\($config, $namespace\)<I18Next\\Locale\\Translations::afterReadAddNamespaceIfNeeded\(\)>`
* :php:meth:`public useNamespaces\(\)<I18Next\\Locale\\Translations::useNamespaces\(\)>`
* :php:meth:`public getNamespaceRanked\(\)<I18Next\\Locale\\Translations::getNamespaceRanked\(\)>`
* :php:meth:`public setLoaderFormat\($format\)<I18Next\\Locale\\Translations::setLoaderFormat\(\)>`


Properties
----------

.. php:attr:: protected static namespace_priority

	:Source:
		`src/I18Next/Locale/Translations.php#23 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L23>`_
	
	:Type: string[] 


.. php:attr:: protected static use_filename_as_namespace

	:Source:
		`src/I18Next/Locale/Translations.php#26 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L26>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public load( $path, $use_filename_as_namespace, ...$namespace_priority)
	
		:Source:
			`src/I18Next/Locale/Translations.php#41 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L41>`_
		
		
		:Parameters:
			* **$path** (string)  
			* **$use_filename_as_namespace** (bool)  
			* **...$namespace_priority** (string | null)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public useFilenameAsNamespace( $enabled)
	
		:Source:
			`src/I18Next/Locale/Translations.php#77 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L77>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public useNamespaces()
	
		:Source:
			`src/I18Next/Locale/Translations.php#243 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L243>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public getNamespaceRanked()
	
		:Source:
			`src/I18Next/Locale/Translations.php#248 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L248>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public setLoaderFormat( $format)
	
		:Source:
			`src/I18Next/Locale/Translations.php#253 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L253>`_
		
		
	
	

