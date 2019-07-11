.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


TranslatorInterface
===================


.. php:namespace:: I18Next

.. php:interface:: TranslatorInterface


	:Source:
		`src/I18Next/TranslatorInterface.php#7 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/TranslatorInterface.php#L7>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\($key, $parameters, $context, $locale\)<I18Next\\TranslatorInterface::\_\(\)>`


Methods
-------

.. rst-class:: public

	.. php:method:: public _( $key, $parameters=null, $context=null, $locale=null)
	
		.. rst-class:: phpdoc-description
		
			| Translates the given message\.
			
		
		:Source:
			`src/I18Next/TranslatorInterface.php#19 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/TranslatorInterface.php#L19>`_
		
		
		:Parameters:
			* **$key** (string)  
			* **$parameters** (array | null)  Array of parameters used to translate message
			* **$context** (string | null)  The context of the request
			* **$locale** (string | null)  The locale or null to use the default

		
		:Returns: string The translated string
	
	

