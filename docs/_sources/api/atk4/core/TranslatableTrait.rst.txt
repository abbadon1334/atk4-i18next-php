.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


TranslatableTrait
=================


.. php:namespace:: atk4\core

.. php:trait:: TranslatableTrait


	.. rst-class:: phpdoc-description
	
		| If a class use this trait, string can be translated calling method translate\.
		
	
	:Source:
		`vendor/atk4/core/src/TranslatableTrait.php#8 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatableTrait.php#L8>`_
	

Properties
----------

.. php:attr:: public static _translatableTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/TranslatableTrait.php#15 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatableTrait.php#L15>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public _( $message, $parameters=null, $domain=null, $locale=null)
	
		.. rst-class:: phpdoc-description
		
			| Translates the given message\.
			
		
		:Source:
			`vendor/atk4/core/src/TranslatableTrait.php#27 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatableTrait.php#L27>`_
		
		
		:Parameters:
			* **$message** (string)  The message to be translated
			* **$parameters** (array)  Array of parameters used to translate message
			* **$domain** (string | null)  The domain for the message or null to use the default
			* **$locale** (string | null)  The locale or null to use the default

		
		:Returns: string The translated string
	
	

.. rst-class:: protected

	.. php:method:: protected processMessage( $message, $parameters=null)
	
		:Source:
			`vendor/atk4/core/src/TranslatableTrait.php#45 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatableTrait.php#L45>`_
		
		
	
	

.. rst-class:: protected

	.. php:method:: protected processMessagePlural( $message, $parameters=null)
	
		:Source:
			`vendor/atk4/core/src/TranslatableTrait.php#50 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatableTrait.php#L50>`_
		
		
	
	

