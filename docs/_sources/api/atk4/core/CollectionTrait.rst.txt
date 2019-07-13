.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


CollectionTrait
===============


.. php:namespace:: atk4\core

.. php:trait:: CollectionTrait


	.. rst-class:: phpdoc-description
	
		| This trait makes it possible for you to add child objects
		| into your object, but unlike "ContainerTrait" you can use
		| multiple collections stored as different array properties\.
		
		| This class does not offer automatic naming, so if you try
		| to add another element with same name, it will result in
		| exception\.
		
	
	:Source:
		`vendor/atk4/core/src/CollectionTrait.php#14 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L14>`_
	

Methods
-------

.. rst-class:: public

	.. php:method:: public _addIntoCollection( $name, $object, $collection)
	
		.. rst-class:: phpdoc-description
		
			| Use this method trait like this:\.
			
			| function addField\($name, $definition\) \{
			|     $field = $this\-\>factory\($definition, \[\], \'\\atk4\\data\\Field\'\);
			| 
			|     return $this\-\>\_addIntoCollection\($name, $field, \'fields\'\);
			| \}
			
		
		:Source:
			`vendor/atk4/core/src/CollectionTrait.php#33 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L33>`_
		
		
		:Parameters:
			* **$name** (string)  Name that can be used to reference object
			* **$object** (object)  New element to add
			* **$collection** (string)  string String corresponding to the name of the property

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: object | mixed $obect
	
	

.. rst-class:: public

	.. php:method:: public _removeFromCollection( $name, $collection)
	
		.. rst-class:: phpdoc-description
		
			| Removes element from specified collection\.
			
		
		:Source:
			`vendor/atk4/core/src/CollectionTrait.php#98 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L98>`_
		
		
		:Parameters:
			* **$name** (string)  
			* **$collection** (string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public _cloneCollection( $collection)
	
		.. rst-class:: phpdoc-description
		
			| Call this on collections after cloning object\. This will clone all collection
			| elements \(which are objects\)\.
			
		
		:Source:
			`vendor/atk4/core/src/CollectionTrait.php#117 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L117>`_
		
		
		:Parameters:
			* **$collection** (string)  to be cloned

		
	
	

.. rst-class:: public

	.. php:method:: public _hasInCollection( $name, $collection)
	
		.. rst-class:: phpdoc-description
		
			| Returns object from collection or false if object is not found\.
			
		
		:Source:
			`vendor/atk4/core/src/CollectionTrait.php#135 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L135>`_
		
		
		:Parameters:
			* **$name** (string)  
			* **$collection** (string)  

		
		:Returns: object | bool 
	
	

.. rst-class:: public

	.. php:method:: public _getFromCollection( $name, $collection)
	
		:Source:
			`vendor/atk4/core/src/CollectionTrait.php#148 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L148>`_
		
		
		:Parameters:
			* **$name** (string)  
			* **$collection** (string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: object 
	
	

.. rst-class:: protected

	.. php:method:: protected _shorten_ml( $desired)
	
		.. rst-class:: phpdoc-description
		
			| Method used internally for shortening object names
			| Identical implementation to ContainerTrait::\_shortern\.
			
		
		:Source:
			`vendor/atk4/core/src/CollectionTrait.php#171 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/CollectionTrait.php#L171>`_
		
		
		:Parameters:
			* **$desired** (string)  Desired name of new object.

		
		:Returns: string Shortened name of new object\.
	
	

