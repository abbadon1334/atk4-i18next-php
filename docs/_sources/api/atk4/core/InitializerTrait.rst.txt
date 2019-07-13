.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


InitializerTrait
================


.. php:namespace:: atk4\core

.. php:trait:: InitializerTrait


	.. rst-class:: phpdoc-description
	
		| Object with this trait will have it\'s init\(\) method executed
		| automatically when initialized through add\(\)\.
		
	
	:Source:
		`vendor/atk4/core/src/InitializerTrait.php#9 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/InitializerTrait.php#L9>`_
	

Properties
----------

.. php:attr:: public static _initializerTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/InitializerTrait.php#16 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/InitializerTrait.php#L16>`_
	
	:Type: bool 


.. php:attr:: public static _initialized

	.. rst-class:: phpdoc-description
	
		| To make sure you have called parent::init\(\) properly\.
		
	
	:Source:
		`vendor/atk4/core/src/InitializerTrait.php#23 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/InitializerTrait.php#L23>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public init()
	
		.. rst-class:: phpdoc-description
		
			| Initialize object\. Always call parent::init\(\)\. Do not call directly\.
			
		
		:Source:
			`vendor/atk4/core/src/InitializerTrait.php#28 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/InitializerTrait.php#L28>`_
		
		
	
	

