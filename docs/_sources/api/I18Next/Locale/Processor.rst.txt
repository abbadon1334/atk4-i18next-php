.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Processor
=========


.. php:namespace:: I18Next\Locale

.. rst-class::  final

.. php:class:: Processor


	:Source:
		`src/I18Next/Locale/Processor.php#13 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Processor.php#L13>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($translations\)<I18Next\\Locale\\Processor::\_\_construct\(\)>`
* :php:meth:`public process\($key, $parameters, $context\)<I18Next\\Locale\\Processor::process\(\)>`
* :php:meth:`private getKeyNamespace\($key\)<I18Next\\Locale\\Processor::getKeyNamespace\(\)>`
* :php:meth:`private getCountFromParameters\($parameters\)<I18Next\\Locale\\Processor::getCountFromParameters\(\)>`
* :php:meth:`private getContextFromParameters\($parameters, $context\)<I18Next\\Locale\\Processor::getContextFromParameters\(\)>`
* :php:meth:`private getNamespaceFromParameters\($parameters\)<I18Next\\Locale\\Processor::getNamespaceFromParameters\(\)>`
* :php:meth:`private processKeyForNamespaces\($key, $keyNamespaceFromParameters\)<I18Next\\Locale\\Processor::processKeyForNamespaces\(\)>`


Properties
----------

Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $translations)
	
		:Source:
			`src/I18Next/Locale/Processor.php#24 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Processor.php#L24>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public process( $key, $parameters=null, $context=null)
	
		:Source:
			`src/I18Next/Locale/Processor.php#38 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Processor.php#L38>`_
		
		
		:Parameters:
			* **$key** (string)  
			* **$parameters** (array | null)  
			* **$context** (string | null)  

		
		:Returns: string | null 
	
	

