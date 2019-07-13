.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


DynamicMethodTrait
==================


.. php:namespace:: atk4\core

.. php:trait:: DynamicMethodTrait


	.. rst-class:: phpdoc-description
	
		| This trait makes it possible for you to add dynamic methods
		| into your object\.
		
	
	:Source:
		`vendor/atk4/core/src/DynamicMethodTrait.php#9 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L9>`_
	

Properties
----------

.. php:attr:: public static _dynamicMethodTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/DynamicMethodTrait.php#16 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L16>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public __call( $method, $arguments)
	
		.. rst-class:: phpdoc-description
		
			| Magic method \- tries to call dynamic method and throws exception if
			| this was not possible\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#25 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L25>`_
		
		
		:Parameters:
			* **$arguments** (array)  Array of arguments to pass to this method

		
	
	

.. rst-class:: public

	.. php:method:: public tryCall( $method, $arguments)
	
		.. rst-class:: phpdoc-description
		
			| Tries to call dynamic method\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#47 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L47>`_
		
		
		:Parameters:
			* **$arguments** (array)  Array of arguments to pass to this method

		
		:Returns: mixed | null 
	
	

.. rst-class:: public

	.. php:method:: public addMethod( $name, $callable)
	
		.. rst-class:: phpdoc-description
		
			| Add new method for this object\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#69 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L69>`_
		
		
		:Parameters:
			* **$name** (string | array)  Name of new method of $this object
			* **$callable** (callable)  Callback

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public hasMethod( $name)
	
		.. rst-class:: phpdoc-description
		
			| Return if this object has specified method \(either native or dynamic\)\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#108 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L108>`_
		
		
		:Parameters:
			* **$name** (string)  Name of the method

		
		:Returns: bool 
	
	

.. rst-class:: public

	.. php:method:: public removeMethod( $name)
	
		.. rst-class:: phpdoc-description
		
			| Remove dynamically registered method\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#122 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L122>`_
		
		
		:Parameters:
			* **$name** (string)  Name of the method

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public addGlobalMethod( $name, $callable)
	
		.. rst-class:: phpdoc-description
		
			| Agile Toolkit objects allow method injection\. This is quite similar
			| to technique used in JavaScript:\.
			
			| obj\.test = function\(\) \{ \.\. \}
			| 
			| All non\-existent method calls on all Agile Toolkit objects will be
			| tried against local table of registered methods and then against
			| global registered methods\.
			| 
			| addGlobalMethod allows you to register a globally\-recognized method for
			| all Agile Toolkit objects\. PHP is not particularly fast about executing
			| methods like that, but this technique can be used for adding
			| backward\-compatibility or debugging, etc\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#152 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L152>`_
		
		
		:Parameters:
			* **$name** (string)  Name of the method
			* **$callable** (callable)  Calls your function($object, $arg1, $arg2)

		
		:See: :any:`\\atk4\\core\\self::hasMethod\(\) <atk4\\core\\self::hasMethod\(\)>` 
		:See: :any:`\\atk4\\core\\self::hasMethod\(\) <atk4\\core\\self::hasMethod\(\)>` 
	
	

.. rst-class:: public

	.. php:method:: public hasGlobalMethod( $name)
	
		.. rst-class:: phpdoc-description
		
			| Return true if such global method exists\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#172 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L172>`_
		
		
		:Parameters:
			* **$name** (string)  Name of the method

		
		:Returns: bool 
	
	

.. rst-class:: public

	.. php:method:: public removeGlobalMethod( $name)
	
		.. rst-class:: phpdoc-description
		
			| Remove dynamically registered global method\.
			
		
		:Source:
			`vendor/atk4/core/src/DynamicMethodTrait.php#187 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DynamicMethodTrait.php#L187>`_
		
		
		:Parameters:
			* **$name** (string)  Name of the method

		
		:Returns: $this 
	
	

