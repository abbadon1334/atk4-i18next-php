.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ConfigTrait
===========


.. php:namespace:: atk4\core

.. php:trait:: ConfigTrait


	.. rst-class:: phpdoc-description
	
		| This trait makes it possible for you to read config files and various configurations
		| use:
		| 1\. use Trait in your APP Class
		|    use \\atk4\\core\\ConfigTrait;
		| 2\. create config\-default\.php and/or config\.php file and add config values like
		|    $config\[\'key\'\] = \'value\';
		| 3\. call $this\-\>readConfig\(\);
		|    before using config\.
		
	
	:Source:
		`vendor/atk4/core/src/ConfigTrait.php#15 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L15>`_
	

Properties
----------

.. php:attr:: public static _configTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/ConfigTrait.php#22 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L22>`_
	
	:Type: bool 


.. php:attr:: protected static config

	.. rst-class:: phpdoc-description
	
		| This property stores config values\. Use getConfig\(\) method to access its values\.
		
	
	:Source:
		`vendor/atk4/core/src/ConfigTrait.php#29 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L29>`_
	
	:Type: array 


Methods
-------

.. rst-class:: public

	.. php:method:: public readConfig( $files=\[config\.php\], $format=php)
	
		.. rst-class:: phpdoc-description
		
			| Read config file or files and store it in $config property\.
			
			| Supported formats:
			| php         \- PHP file with $config\[\'foo\'\] = \'bar\' structure
			| php\-inline  \- PHP file with return \[\'foo\' =\> \'bar\'\] structure
			| json        \- JSON file with \{\'foo\':\'bar\'\} structure
			| yaml        \- YAML file with yaml structure
			
		
		:Source:
			`vendor/atk4/core/src/ConfigTrait.php#47 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L47>`_
		
		
		:Parameters:
			* **$files** (string | array)  One or more filenames
			* **$format** (string)  Optional format for config files

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public setConfig( $paths=\[\], $value=null)
	
		.. rst-class:: phpdoc-description
		
			| Manually set configuration option\.
			
		
		:Source:
			`vendor/atk4/core/src/ConfigTrait.php#107 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L107>`_
		
		
		:Parameters:
			* **$paths** (string | array)  Path to configuration element to set or array of [path=>value]
			* **$value** (mixed)  Value to set

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public getConfig( $path, $default_value=null)
	
		.. rst-class:: phpdoc-description
		
			| Get configuration element\.
			
		
		:Source:
			`vendor/atk4/core/src/ConfigTrait.php#136 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L136>`_
		
		
		:Parameters:
			* **$path** (string)  Path to configuration element.
			* **$default_value** (mixed)  Default value returned if element don't exist

		
		:Returns: mixed 
	
	

.. rst-class:: protected

	.. php:method:: protected _lookupConfigElement( $path, $create_elements=false)
	
		.. rst-class:: phpdoc-description
		
			| Internal method to lookup config element by given path\.
			
		
		:Source:
			`vendor/atk4/core/src/ConfigTrait.php#157 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ConfigTrait.php#L157>`_
		
		
		:Parameters:
			* **$path** (string)  Path to navigate to
			* **$create_elements** (bool)  Should we create elements it they don't exist

		
	
	

