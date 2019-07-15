.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Translations
============


.. php:namespace:: I18Next\Locale

.. rst-class::  final

.. php:class:: Translations


	:Source:
		`src/I18Next/Locale/Translations.php#16 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L16>`_
	
	:Used traits:
		:php:trait:`atk4\\core\\ConfigTrait` 
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public load\($path, $use\_filename\_as\_namespace, $namespace\_priority\)<I18Next\\Locale\\Translations::load\(\)>`
* :php:meth:`private loadSingle\($path\)<I18Next\\Locale\\Translations::loadSingle\(\)>`
* :php:meth:`public useFilenameAsNamespace\($enabled\)<I18Next\\Locale\\Translations::useFilenameAsNamespace\(\)>`
* :php:meth:`private setNamespacePriority\($namespace\_priority\)<I18Next\\Locale\\Translations::setNamespacePriority\(\)>`
* :php:meth:`private processKeyVariation\($processorClass, $key, $value\)<I18Next\\Locale\\Translations::processKeyVariation\(\)>`
* :php:meth:`private afterReadProcessForKeyCounters\(\)<I18Next\\Locale\\Translations::afterReadProcessForKeyCounters\(\)>`
* :php:meth:`private afterReadProcessForKeyDeepInline\(\)<I18Next\\Locale\\Translations::afterReadProcessForKeyDeepInline\(\)>`
* :php:meth:`private afterReadAddNamespaceIfNeeded\($config, $namespace\)<I18Next\\Locale\\Translations::afterReadAddNamespaceIfNeeded\(\)>`
* :php:meth:`public useNamespaces\(\)<I18Next\\Locale\\Translations::useNamespaces\(\)>`
* :php:meth:`public getNamespaceRanked\(\)<I18Next\\Locale\\Translations::getNamespaceRanked\(\)>`
* :php:meth:`public setLoaderFormat\($format\)<I18Next\\Locale\\Translations::setLoaderFormat\(\)>`


Properties
----------

.. php:attr:: protected static namespace_priority

	:Source:
		`src/I18Next/Locale/Translations.php#24 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L24>`_
	
	:Type: string[] 


.. php:attr:: protected static use_filename_as_namespace

	:Source:
		`src/I18Next/Locale/Translations.php#27 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L27>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public load( $path, $use_filename_as_namespace, ...$namespace_priority)
	
		:Source:
			`src/I18Next/Locale/Translations.php#42 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L42>`_
		
		
		:Parameters:
			* **$path** (string)  
			* **$use_filename_as_namespace** (bool)  
			* **...$namespace_priority** (string | null)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public useFilenameAsNamespace( $enabled)
	
		:Source:
			`src/I18Next/Locale/Translations.php#95 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L95>`_
		
		
		:Parameters:
			* **$enabled** (bool | null)  

		
	
	

.. rst-class:: public

	.. php:method:: public useNamespaces()
	
		:Source:
			`src/I18Next/Locale/Translations.php#190 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L190>`_
		
		
		:Returns: bool 
	
	

.. rst-class:: public

	.. php:method:: public getNamespaceRanked()
	
		:Source:
			`src/I18Next/Locale/Translations.php#198 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L198>`_
		
		
		:Returns: string[] 
	
	

.. rst-class:: public

	.. php:method:: public setLoaderFormat( $format)
	
		:Source:
			`src/I18Next/Locale/Translations.php#206 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Translations.php#L206>`_
		
		
		:Parameters:
			* **$format** (string)  

		
	
	

