.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


HookTrait
=========


.. php:namespace:: atk4\core

.. php:trait:: HookTrait


	:Source:
		`vendor/atk4/core/src/HookTrait.php#5 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L5>`_
	

Properties
----------

.. php:attr:: public static _hookTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/HookTrait.php#12 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L12>`_
	
	:Type: bool 


.. php:attr:: protected static hooks

	.. rst-class:: phpdoc-description
	
		| Contains information about configured hooks \(callbacks\)\.
		
	
	:Source:
		`vendor/atk4/core/src/HookTrait.php#19 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L19>`_
	
	:Type: array 


Methods
-------

.. rst-class:: public

	.. php:method:: public addHook( $hook_spot, $callable, $arguments=null, $priority=null)
	
		.. rst-class:: phpdoc-description
		
			| Add another callback to be executed during hook\($hook\_spot\);\.
			
			| If priority is negative, then hooks will be executed in reverse order\.
			
		
		:Source:
			`vendor/atk4/core/src/HookTrait.php#33 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L33>`_
		
		
		:Parameters:
			* **$hook_spot** (string)  Hook identifier to bind on
			* **$callable** (object | callable)  Will be called on hook()
			* **$arguments** (array)  Arguments are passed to $callable
			* **$priority** (int)  Lower priority is called sooner

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public removeHook( $hook_spot)
	
		.. rst-class:: phpdoc-description
		
			| Delete all hooks for specified spot\.
			
		
		:Source:
			`vendor/atk4/core/src/HookTrait.php#105 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L105>`_
		
		
		:Parameters:
			* **$hook_spot** (string)  Hook identifier to bind on

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public hookHasCallbacks( $hook_spot)
	
		.. rst-class:: phpdoc-description
		
			| Returns true if at least one callback is defined for this hook\.
			
		
		:Source:
			`vendor/atk4/core/src/HookTrait.php#119 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L119>`_
		
		
		:Parameters:
			* **$hook_spot** (string)  Hook identifier

		
		:Returns: bool 
	
	

.. rst-class:: public

	.. php:method:: public hook( $hook_spot, $arg=null)
	
		.. rst-class:: phpdoc-description
		
			| Execute all callables assigned to $hook\_spot\.
			
		
		:Source:
			`vendor/atk4/core/src/HookTrait.php#134 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L134>`_
		
		
		:Parameters:
			* **$hook_spot** (string)  Hook identifier
			* **$arg** (array)  Additional arguments to callables

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: mixed Array of responses or value specified to breakHook
	
	

.. rst-class:: public

	.. php:method:: public breakHook( $return)
	
		.. rst-class:: phpdoc-description
		
			| When called from inside a hook callable, will stop execution of other
			| callables on the same hook\. The passed argument will be returned by the
			| hook method\.
			
		
		:Source:
			`vendor/atk4/core/src/HookTrait.php#187 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/HookTrait.php#L187>`_
		
		
		:Parameters:
			* **$return** (mixed)  What would hook() return?

		
		:Throws: :any:`\\atk4\\core\\HookBreaker <atk4\\core\\HookBreaker>` 
	
	

