.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


TranslatorSymfonyTrait
======================


.. php:namespace:: atk4\core

.. php:trait:: TranslatorSymfonyTrait


	:Source:
		`vendor/atk4/core/src/TranslatorSymfonyTrait.php#8 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatorSymfonyTrait.php#L8>`_
	

Properties
----------

.. php:attr:: protected static translator

	:Source:
		`vendor/atk4/core/src/TranslatorSymfonyTrait.php#11 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatorSymfonyTrait.php#L11>`_
	
	:Type: :any:`\\Symfony\\Contracts\\Translation\\TranslatorInterface <Symfony\\Contracts\\Translation\\TranslatorInterface>` 


Methods
-------

.. rst-class:: public

	.. php:method:: public setTranslator( $translator)
	
		:Source:
			`vendor/atk4/core/src/TranslatorSymfonyTrait.php#18 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatorSymfonyTrait.php#L18>`_
		
		
		:Parameters:
			* **$translator** (:any:`Symfony\\Contracts\\Translation\\TranslatorInterface <Symfony\\Contracts\\Translation\\TranslatorInterface>`)  

		
		:Returns: :any:`\\Symfony\\Contracts\\Translation\\TranslatorInterface <Symfony\\Contracts\\Translation\\TranslatorInterface>` 
	
	

.. rst-class:: public

	.. php:method:: public _( $message, $parameters=null, $domain=null, $locale=null)
	
		.. rst-class:: phpdoc-description
		
			| Translates the given message\.
			
		
		:Source:
			`vendor/atk4/core/src/TranslatorSymfonyTrait.php#36 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TranslatorSymfonyTrait.php#L36>`_
		
		
		:Parameters:
			* **$message** (string)  The message to be translated
			* **$parameters** (array | null)  Array of parameters used to translate message
			* **$domain** (string | null)  The domain for the message or null to use the default
			* **$locale** (string | null)  The locale or null to use the default

		
		:Throws: :any:`\\InvalidArgumentException <InvalidArgumentException>` If the locale contains invalid characters
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Throws: :any:`\\InvalidArgumentException <InvalidArgumentException>` If the locale contains invalid characters
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: string The translated string
	
	

