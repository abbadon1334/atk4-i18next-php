.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


TranslatorI18NextTrait
======================


.. php:namespace:: I18Next\atk4

.. php:trait:: TranslatorI18NextTrait


	:Source:
		`src/I18Next/atk4/TranslatorI18NextTrait.php#10 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/atk4/TranslatorI18NextTrait.php#L10>`_
	

Properties
----------

.. php:attr:: protected static translator

	:Source:
		`src/I18Next/atk4/TranslatorI18NextTrait.php#13 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/atk4/TranslatorI18NextTrait.php#L13>`_
	
	:Type: :any:`\\I18Next\\TranslatorInterface <I18Next\\TranslatorInterface>` 


Methods
-------

.. rst-class:: public

	.. php:method:: public setTranslator( $translator)
	
		:Source:
			`src/I18Next/atk4/TranslatorI18NextTrait.php#20 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/atk4/TranslatorI18NextTrait.php#L20>`_
		
		
		:Parameters:
			* **$translator** (:any:`I18Next\\TranslatorInterface <I18Next\\TranslatorInterface>`)  

		
		:Returns: :any:`\\I18Next\\TranslatorInterface <I18Next\\TranslatorInterface>` 
	
	

.. rst-class:: public

	.. php:method:: public _( $message, $parameters=null, $domain=null, $locale=null)
	
		.. rst-class:: phpdoc-description
		
			| Translates the given message\.
			
		
		:Source:
			`src/I18Next/atk4/TranslatorI18NextTrait.php#36 <https://github.com/abbadon1334/phpdoc-to-rst/blob/master/src/I18Next/atk4/TranslatorI18NextTrait.php#L36>`_
		
		
		:Parameters:
			* **$message** (string)  The message to be translated
			* **$parameters** (array | null)  Array of parameters used to translate message
			* **$domain** (string | null)  The domain for the message or null to use the default
			* **$locale** (string | null)  The locale or null to use the default

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: string The translated string
	
	

