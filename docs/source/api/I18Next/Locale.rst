.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Locale
======


.. php:namespace:: I18Next

.. rst-class::  final

.. php:class:: Locale


	:Source:
		`src/I18Next/Locale.php#14 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale.php#L14>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($code\)<I18Next\\Locale::\_\_construct\(\)>`
* :php:meth:`public load\($path, $use\_filename\_as\_namespace, $namespace\_priority\)<I18Next\\Locale::load\(\)>`
* :php:meth:`public process\($key, $parameters, $context\)<I18Next\\Locale::process\(\)>`
* :php:meth:`public setLoaderFormat\($format\)<I18Next\\Locale::setLoaderFormat\(\)>`


Properties
----------

Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $code)
	
		.. rst-class:: phpdoc-description
		
			| Locale constructor\.
			
		
		:Source:
			`src/I18Next/Locale.php#33 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale.php#L33>`_
		
		
		:Parameters:
			* **$code** (string)  

		
	
	

.. rst-class:: public

	.. php:method:: public load( $path, $use_filename_as_namespace, ...$namespace_priority)
	
		:Source:
			`src/I18Next/Locale.php#47 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale.php#L47>`_
		
		
		:Parameters:
			* **$path** (string)  
			* **$use_filename_as_namespace** (bool)  
			* **...$namespace_priority** (string | null)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public process( $key, $parameters=null, $context=null)
	
		:Source:
			`src/I18Next/Locale.php#59 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale.php#L59>`_
		
		
		:Parameters:
			* **$key** (string)  
			* **$parameters** (array | null)  
			* **$context** (string | null)  

		
		:Returns: string | null 
	
	

.. rst-class:: public

	.. php:method:: public setLoaderFormat( $format)
	
		:Source:
			`src/I18Next/Locale.php#67 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale.php#L67>`_
		
		
		:Parameters:
			* **$format** (string)  

		
	
	

