.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


PHPUnit7\_AgileTestCase
=======================


.. php:namespace:: atk4\core

.. php:class:: PHPUnit7_AgileTestCase


	.. rst-class:: phpdoc-description
	
		| Generic TestCase for PHPUnit tests for ATK4 repos\.
		
	
	:Source:
		`vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#12 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#L12>`_
	
	:Parent:
		:php:class:`PHPUnit\\Framework\\TestCase`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public runBare\(\)<atk4\\core\\PHPUnit7\_AgileTestCase::runBare\(\)>`
* :php:meth:`public callProtected\($obj, $name, $args\)<atk4\\core\\PHPUnit7\_AgileTestCase::callProtected\(\)>`
* :php:meth:`public getProtected\($obj, $name\)<atk4\\core\\PHPUnit7\_AgileTestCase::getProtected\(\)>`
* :php:meth:`public testFake\(\)<atk4\\core\\PHPUnit7\_AgileTestCase::testFake\(\)>`


Methods
-------

.. rst-class:: public

	.. php:method:: public runBare()
	
		:Source:
			`vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#14 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#L14>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public callProtected( $obj, $name, $args=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Calls protected method\.
			
			| NOTE: this method must only be used for low\-level functionality, not
			| for general test\-scripts\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#41 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#L41>`_
		
		
		:Parameters:
			* **$obj** (object)  
			* **$name** (string)  
			* **$args** (array)  

		
		:Throws: :any:`\\ReflectionException <ReflectionException>` 
		:Returns: mixed 
	
	

.. rst-class:: public

	.. php:method:: public getProtected( $obj, $name)
	
		.. rst-class:: phpdoc-description
		
			| Returns protected property value\.
			
			| NOTE: this method must only be used for low\-level functionality, not
			| for general test\-scripts\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#63 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#L63>`_
		
		
		:Parameters:
			* **$obj** (object)  
			* **$name** (string)  

		
		:Throws: :any:`\\ReflectionException <ReflectionException>` 
		:Returns: mixed 
	
	

.. rst-class:: public

	.. php:method:: public testFake()
	
		.. rst-class:: phpdoc-description
		
			| Fake test\. Otherwise Travis gives warning that there are no tests in here\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#75 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit7_AgileTestCase.php#L75>`_
		
		
	
	

