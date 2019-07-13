.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ContainerTrait
==============


.. php:namespace:: atk4\core

.. php:trait:: ContainerTrait


	.. rst-class:: phpdoc-description
	
		| This trait makes it possible for you to add child objects
		| into your object\.
		
	
	:Source:
		`vendor/atk4/core/src/ContainerTrait.php#9 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L9>`_
	

Properties
----------

.. php:attr:: public static _containerTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/ContainerTrait.php#16 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L16>`_
	
	:Type: bool 


.. php:attr:: public static elements

	.. rst-class:: phpdoc-description
	
		| short\_name =\> object hash of children objects\. If the child is not
		| trackable, then object will be set to "true" \(to avoid extra reference\)\.
		
	
	:Source:
		`vendor/atk4/core/src/ContainerTrait.php#24 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L24>`_
	
	:Type: array 


Methods
-------

.. rst-class:: public

	.. php:method:: public _unique_element( $desired)
	
		.. rst-class:: phpdoc-description
		
			| Returns unique element name based on desired name\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#35 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L35>`_
		
		
		:Parameters:
			* **$desired** (string)  

		
		:Returns: string 
	
	

.. rst-class:: public

	.. php:method:: public add( $obj, $args=\[\])
	
		.. rst-class:: phpdoc-description
		
			| If you are using ContainerTrait only, then you can safely
			| use this add\(\) method\. If you are also using factory, or
			| initializer then redefine add\(\) and call
			| \_add\_Container, \_add\_Factory,\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#60 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L60>`_
		
		
		:Parameters:
			* **$obj** (mixed)  
			* **$args** (array | string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: object 
	
	

.. rst-class:: protected

	.. php:method:: protected _add_Container( $element, $args=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Extension to add\(\) method which will perform linking of
			| the object with the current class\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#101 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L101>`_
		
		
		:Parameters:
			* **$element** (object)  
			* **$args** (array | string)  

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: object 
	
	

.. rst-class:: public

	.. php:method:: public removeElement( $short_name)
	
		.. rst-class:: phpdoc-description
		
			| Remove child element if it exists\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#181 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L181>`_
		
		
		:Parameters:
			* **$short_name** (string)  short name of the element

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: $this 
	
	

.. rst-class:: protected

	.. php:method:: protected _shorten( $desired)
	
		.. rst-class:: phpdoc-description
		
			| Method used internally for shortening object names\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#207 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L207>`_
		
		
		:Parameters:
			* **$desired** (string)  Desired name of new object.

		
		:Returns: string Shortened name of new object\.
	
	

.. rst-class:: public

	.. php:method:: public getElement( $short_name)
	
		.. rst-class:: phpdoc-description
		
			| Find child element by its short name\. Use in chaining\.
			
			| Exception if not found\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#246 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L246>`_
		
		
		:Parameters:
			* **$short_name** (string)  Short name of the child element

		
		:Throws: :any:`\\atk4\\core\\Exception <atk4\\core\\Exception>` 
		:Returns: object 
	
	

.. rst-class:: public

	.. php:method:: public hasElement( $short_name)
	
		.. rst-class:: phpdoc-description
		
			| Find child element\. Use in condition\.
			
		
		:Source:
			`vendor/atk4/core/src/ContainerTrait.php#266 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/ContainerTrait.php#L266>`_
		
		
		:Parameters:
			* **$short_name** (string)  Short name of the child element

		
		:Returns: object | bool 
	
	

