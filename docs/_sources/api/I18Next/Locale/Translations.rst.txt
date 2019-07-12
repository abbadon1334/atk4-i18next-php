.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Translations
============


.. php:namespace:: I18Next\Locale

.. rst-class::  final

.. php:class:: Translations


	:Source:
		`src/I18Next/Locale/Translations.php#14 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L14>`_
	
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
* :php:meth:`private afterReadProcessForKeyDeepInline\(\)<I18Next\\Locale\\Translations::afterReadProcessForKeyDeepInline\(\)>`
* :php:meth:`private afterReadAddNamespaceIfNeeded\($config, $namespace\)<I18Next\\Locale\\Translations::afterReadAddNamespaceIfNeeded\(\)>`
* :php:meth:`public useNamespaces\(\)<I18Next\\Locale\\Translations::useNamespaces\(\)>`
* :php:meth:`public getNamespaceRanked\(\)<I18Next\\Locale\\Translations::getNamespaceRanked\(\)>`
* :php:meth:`public setLoaderFormat\($format\)<I18Next\\Locale\\Translations::setLoaderFormat\(\)>`


Properties
----------

.. php:attr:: protected static namespace_priority

	:Source:
		`src/I18Next/Locale/Translations.php#22 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L22>`_
	
	:Type: string[] 


.. php:attr:: protected static use_filename_as_namespace

	:Source:
		`src/I18Next/Locale/Translations.php#25 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L25>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public load( $path, $use_filename_as_namespace, ...$namespace_priority)
	
		:Source:
			`src/I18Next/Locale/Translations.php#40 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L40>`_
		
		
		:Parameters:
			* **$path** (string)  
			* **$use_filename_as_namespace** (bool)  
			* **...$namespace_priority** (string | null)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public useFilenameAsNamespace( $enabled)
	
		:Source:
			`src/I18Next/Locale/Translations.php#75 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L75>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public useNamespaces()
	
		:Source:
			`src/I18Next/Locale/Translations.php#162 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L162>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public getNamespaceRanked()
	
		:Source:
			`src/I18Next/Locale/Translations.php#167 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L167>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public setLoaderFormat( $format)
	
		:Source:
			`src/I18Next/Locale/Translations.php#172 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/Locale/Translations.php#L172>`_
		
		
	
	

