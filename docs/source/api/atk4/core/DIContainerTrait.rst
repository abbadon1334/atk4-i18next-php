.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


DIContainerTrait
================


.. php:namespace:: atk4\core

.. php:trait:: DIContainerTrait


	.. rst-class:: phpdoc-description
	
		| A class with this trait will have setDefaults\(\) method that can
		| be passed list of default properties\.
		
		| $view\-\>setDefaults\(\[\'ui\' =\> \'segment\'\]\);
		| 
		| Typically you would want to do that inside your constructor\. The
		| default handling of the properties is:
		| 
		|  \- only apply properties that are defined
		|  \- only set property if it\'s current value is null
		|  \- ignore defaults that have null value
		|  \- if existing property and default have array, then both arrays will be merged
		| 
		| Several classes may opt to extend setDefaults, for example in Agile UI
		| setDefaults is extended to support classes and content:
		| 
		| $segment\-\>setDefaults\(\[\'Hello There\', \'red\', \'ui\'=\>\'segment\'\]\);
		| 
		| WARNING: Do not use this trait unless you have a lot of properties
		| to inject\. Also follow the guidelines on
		| https://github\.com/atk4/ui/wiki/Object\-Constructors
		| 
		| Relying on this trait excessively may cause anger management issues to
		| some code reviewers\.
		
	
	:Source:
		`vendor/atk4/core/src/DIContainerTrait.php#31 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DIContainerTrait.php#L31>`_
	

Properties
----------

.. php:attr:: public static _DIContainerTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/DIContainerTrait.php#38 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DIContainerTrait.php#L38>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public setDefaults( $properties=\[\], $passively=false)
	
		.. rst-class:: phpdoc-description
		
			| Call from \_\_construct\(\) to initialize the properties allowing
			| developer to pass Dependency Injector Container\.
			
		
		:Source:
			`vendor/atk4/core/src/DIContainerTrait.php#47 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DIContainerTrait.php#L47>`_
		
		
		:Parameters:
			* **$properties** (array)  
			* **$passively** (bool)  if true, existing non-null argument values will be kept

		
	
	

.. rst-class:: protected

	.. php:method:: protected setMissingProperty( $key, $value)
	
		.. rst-class:: phpdoc-description
		
			| Sets object property\.
			
			| Throws exception\.
			
		
		:Source:
			`vendor/atk4/core/src/DIContainerTrait.php#76 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DIContainerTrait.php#L76>`_
		
		
		:Parameters:
			* **$key** (mixed)  
			* **$value** (mixed)  

		
	
	

