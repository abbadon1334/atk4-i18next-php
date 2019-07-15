.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


Key
===


.. php:namespace:: I18Next\Locale\Processor

.. rst-class::  final

.. php:class:: Key


	:Source:
		`src/I18Next/Locale/Processor/Key.php#10 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Processor/Key.php#L10>`_
	
	:Parent:
		:php:class:`I18Next\\Locale\\Processor\\AbstractProcessor`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public processKey\($key, $context, $counter\)<I18Next\\Locale\\Processor\\Key::processKey\(\)>`
* :php:meth:`private processDirectPipedKey\($key, $counter\)<I18Next\\Locale\\Processor\\Key::processDirectPipedKey\(\)>`
* :php:meth:`private processWithCounter\($key, $counter\)<I18Next\\Locale\\Processor\\Key::processWithCounter\(\)>`
* :php:meth:`private process\($key\)<I18Next\\Locale\\Processor\\Key::process\(\)>`
* :php:meth:`private processWithNamespaceWithCounter\($key, $counter\)<I18Next\\Locale\\Processor\\Key::processWithNamespaceWithCounter\(\)>`
* :php:meth:`private processWithNamespace\($key\)<I18Next\\Locale\\Processor\\Key::processWithNamespace\(\)>`
* :php:meth:`private getKeyNamespace\($key\)<I18Next\\Locale\\Processor\\Key::getKeyNamespace\(\)>`
* :php:meth:`private getOnlyKeyFromNamespacedKey\($key, $namespace\)<I18Next\\Locale\\Processor\\Key::getOnlyKeyFromNamespacedKey\(\)>`


Methods
-------

.. rst-class:: public

	.. php:method:: public processKey( $key, $context=null, $counter=null)
	
		:Source:
			`src/I18Next/Locale/Processor/Key.php#19 <https://github.com/abbadon1334/atk4-i18next-php/blob/master/src/I18Next/Locale/Processor/Key.php#L19>`_
		
		
		:Parameters:
			* **$key** (string)  
			* **$context** (string | null)  
			* **$counter** (int | null)  

		
		:Returns: string | null 
	
	

