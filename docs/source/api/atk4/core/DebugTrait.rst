.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


DebugTrait
==========


.. php:namespace:: atk4\core

.. php:trait:: DebugTrait


	:Source:
		`vendor/atk4/core/src/DebugTrait.php#7 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L7>`_
	

Properties
----------

.. php:attr:: public static _debugTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/DebugTrait.php#14 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L14>`_
	
	:Type: bool 


.. php:attr:: public static debug

	:Source:
		`vendor/atk4/core/src/DebugTrait.php#17 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L17>`_
	
	:Type: bool Is debug enabled?


.. php:attr:: protected static _prev_bt

	:Source:
		`vendor/atk4/core/src/DebugTrait.php#20 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L20>`_
	
	:Type: array Helps debugTraceChange\.


Methods
-------

.. rst-class:: protected

	.. php:method:: protected _echo_stderr( $message)
	
		.. rst-class:: phpdoc-description
		
			| Outputs message to STDERR\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#29 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L29>`_
		
		
		:Parameters:
			* **$message** (string)  

		
	
	

.. rst-class:: public

	.. php:method:: public debug( $message=true, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Send some info to debug stream\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#42 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L42>`_
		
		
		:Parameters:
			* **$message** (bool | string)  
			* **$context** (array)  

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public log( $level, $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Output log message\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#71 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L71>`_
		
		
		:Parameters:
			* **$level** (string)  
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public userMessage( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Output message that needs to be acknowledged by application user\. Make sure
			| that $context does not contain any sensitive information\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#91 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L91>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public debugTraceChange( $trace=default)
	
		.. rst-class:: phpdoc-description
		
			| Method designed to intercept one of the hardest\-to\-debug situations within Agile Toolkit\.
			
			| Suppose you define a hook and the hook needs to be called only once, but somehow it is
			| being called multiple times\. You want to know where and how those calls come through\.
			| 
			| Place debugTraceChange inside your hook and give unique $trace identifier\. If the method
			| is invoked through different call paths, this debug info will be logged\.
			| 
			| Do not leave this method in production code \!\!\!
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#117 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L117>`_
		
		
		:Parameters:
			* **$trace** (string)  

		
	
	

.. rst-class:: public

	.. php:method:: public emergency( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| System is unusable\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#144 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L144>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

.. rst-class:: public

	.. php:method:: public alert( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Action must be taken immediately\.
			
			| Example: Entire website down, database unavailable, etc\. This should
			| trigger the SMS alerts and wake you up\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#160 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L160>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

.. rst-class:: public

	.. php:method:: public critical( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Critical conditions\.
			
			| Example: Application component unavailable, unexpected exception\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#175 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L175>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

.. rst-class:: public

	.. php:method:: public error( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Runtime errors that do not require immediate action but should typically
			| be logged and monitored\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#189 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L189>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

.. rst-class:: public

	.. php:method:: public warning( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Exceptional occurrences that are not errors\.
			
			| Example: Use of deprecated APIs, poor use of an API, undesirable things
			| that are not necessarily wrong\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#205 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L205>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

.. rst-class:: public

	.. php:method:: public notice( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Normal but significant events\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#218 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L218>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

.. rst-class:: public

	.. php:method:: public info( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Interesting events\.
			
			| Example: User logs in, SQL logs\.
			
		
		:Source:
			`vendor/atk4/core/src/DebugTrait.php#233 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/DebugTrait.php#L233>`_
		
		
		:Parameters:
			* **$message** (string)  
			* **$context** (array)  

		
		:Returns: void 
	
	

