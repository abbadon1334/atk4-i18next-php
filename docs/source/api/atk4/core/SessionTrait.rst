.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


SessionTrait
============


.. php:namespace:: atk4\core

.. php:trait:: SessionTrait


	:Source:
		`vendor/atk4/core/src/SessionTrait.php#5 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L5>`_
	

Properties
----------

.. php:attr:: public static _sessionTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/SessionTrait.php#12 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L12>`_
	
	:Type: bool 


.. php:attr:: protected static session_key

	.. rst-class:: phpdoc-description
	
		| Session container key\.
		
	
	:Source:
		`vendor/atk4/core/src/SessionTrait.php#19 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L19>`_
	
	:Type: string 


Methods
-------

.. rst-class:: public

	.. php:method:: public startSession( $options=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Create new session\.
			
		
		:Source:
			`vendor/atk4/core/src/SessionTrait.php#26 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L26>`_
		
		
		:Parameters:
			* **$options** (array)  Options for session_start()

		
	
	

.. rst-class:: public

	.. php:method:: public destroySession()
	
		.. rst-class:: phpdoc-description
		
			| Destroy existing session\.
			
		
		:Source:
			`vendor/atk4/core/src/SessionTrait.php#49 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L49>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public memorize( $key, $value)
	
		.. rst-class:: phpdoc-description
		
			| Remember data in object\-relevant session data\.
			
		
		:Source:
			`vendor/atk4/core/src/SessionTrait.php#65 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L65>`_
		
		
		:Parameters:
			* **$key** (string)  Key for the data
			* **$value** (mixed)  Value

		
		:Returns: mixed $value
	
	

.. rst-class:: public

	.. php:method:: public learn( $key, $default=null)
	
		.. rst-class:: phpdoc-description
		
			| Similar to memorize, but if value for key exist, will return it\.
			
		
		:Source:
			`vendor/atk4/core/src/SessionTrait.php#86 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L86>`_
		
		
		:Parameters:
			* **$key** (string)  Data Key
			* **$default** (mixed)  Default value

		
		:Returns: mixed Previously memorized data or $default
	
	

.. rst-class:: public

	.. php:method:: public recall( $key, $default=null)
	
		.. rst-class:: phpdoc-description
		
			| Returns session data for this object\. If not previously set, then
			| $default is returned\.
			
		
		:Source:
			`vendor/atk4/core/src/SessionTrait.php#108 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L108>`_
		
		
		:Parameters:
			* **$key** (string)  Data Key
			* **$default** (mixed)  Default value

		
		:Returns: mixed Previously memorized data or $default
	
	

.. rst-class:: public

	.. php:method:: public forget( $key=null)
	
		.. rst-class:: phpdoc-description
		
			| Forget session data for $key\. If $key is omitted will forget all
			| associated session data\.
			
		
		:Source:
			`vendor/atk4/core/src/SessionTrait.php#133 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/SessionTrait.php#L133>`_
		
		
		:Parameters:
			* **$key** (string)  Optional key of data to forget

		
		:Returns: $this 
	
	

