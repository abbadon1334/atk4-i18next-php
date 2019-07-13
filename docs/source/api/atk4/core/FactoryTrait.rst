.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


FactoryTrait
============


.. php:namespace:: atk4\core

.. php:trait:: FactoryTrait


	:Source:
		`vendor/atk4/core/src/FactoryTrait.php#5 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/FactoryTrait.php#L5>`_
	

Properties
----------

.. php:attr:: public static _factoryTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/FactoryTrait.php#12 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/FactoryTrait.php#L12>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public mergeSeeds( $seed, $seed2, ...$more_seeds)
	
		.. rst-class:: phpdoc-description
		
			| Given two seeds \(or more\) will merge them, prioritizing the first argument\.
			
			| If object is passed on either of arguments, then it will setDefaults\(\) remaining
			| arguments, respecting their positioning\.
			| 
			| See full documentation\.
			
		
		:Source:
			`vendor/atk4/core/src/FactoryTrait.php#27 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/FactoryTrait.php#L27>`_
		
		
		:Parameters:
			* **$seed** (array | object | mixed)  
			* **$seed2** (array | object | mixed)  
			* **...$more_seeds** (array)  

		
		:Returns: object | array if at least one seed is an object, will return object
	
	

.. rst-class:: public

	.. php:method:: public factory( $seed, $defaults=\[\], $prefix=null)
	
		.. rst-class:: phpdoc-description
		
			| Given a Seed \(see doc\) as a first argument, will create object of a corresponding
			| class, call constructor with numerical arguments of a seed and inject key/value
			| arguments\.
			
			| Argument $defaults has the same effect as the seed, but will not contain the class\.
			| Class is always determined by seed, except if you pass object into defaults\.
			| 
			| To learn more about mechanics of factory trait, see documentation
			
		
		:Source:
			`vendor/atk4/core/src/FactoryTrait.php#112 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/FactoryTrait.php#L112>`_
		
		
		:Parameters:
			* **$seed** (mixed)  
			* **$defaults** (array)  
			* **$prefix** (string)  Optional prefix for class name

		
		:Returns: object 
	
	

.. rst-class:: public

	.. php:method:: public normalizeClassName( $name, $prefix=null)
	
		.. rst-class:: phpdoc-description
		
			| First normalize class name, then add specified prefix to
			| class name\. Finally if $app is defined, and has method
			| \`normalizeClassNameApp\` it will also get a chance to
			| add prefix\.
			
			| Rules observed, in order:
			|  \- If class starts with "\." then prefixing is always done\.
			|  \- If class contains "\\" prefixing is never done\.
			|  \- If class \(with prefix\) exists, do prefix\.
			|  \- don\'t prefix otherwise\.
			| 
			| Example: normalizeClassName\(\'User\', \'Model\'\) == \'Model\\User\';
			| Example: normalizeClassName\(Test\\User::class, \'Model\'\) == \'Test\\User\'; \# or as per "use"
			| Example: normalizeClassName\(\'Test/User\', \'Model\'\) == \'Model\\Test\\User\';
			| Example: normalizeClassName\(\'\./User\', \'Model\'\) == \'Model\\User\';
			| Example: normalizeClassName\(\'User\', \'Model\'\) == \'Model\\User\'; \# if exists, \'User\' otherwise
			| 
			| \# If used without namespace:
			| Example: normalizeClassName\(User::class, \'Model\'\) == \'Model\\User\'; \# if exists, \'User\' otherwise
			
		
		:Source:
			`vendor/atk4/core/src/FactoryTrait.php#198 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/FactoryTrait.php#L198>`_
		
		
		:Parameters:
			* **$name** (string)  Name of class
			* **$prefix** (string)  Optional prefix for class name

		
		:Returns: string Full, normalized class name
	
	

