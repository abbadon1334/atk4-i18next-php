.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


PHPUnit\_AgileTestCase
======================


.. php:namespace:: atk4\core

.. php:class:: PHPUnit_AgileTestCase


	.. rst-class:: phpdoc-description
	
		| Generic TestCase for PHPUnit tests for ATK4 repos\.
		
	
	:Source:
		`vendor/atk4/core/src/PHPUnit_AgileTestCase.php#8 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit_AgileTestCase.php#L8>`_
	
	:Parent:
		:php:class:`PHPUnit\_Framework\_TestCase`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public runBare\(\)<atk4\\core\\PHPUnit\_AgileTestCase::runBare\(\)>`
* :php:meth:`public callProtected\($obj, $name, $args\)<atk4\\core\\PHPUnit\_AgileTestCase::callProtected\(\)>`
* :php:meth:`public getProtected\($obj, $name\)<atk4\\core\\PHPUnit\_AgileTestCase::getProtected\(\)>`
* :php:meth:`public testFake\(\)<atk4\\core\\PHPUnit\_AgileTestCase::testFake\(\)>`


Methods
-------

.. rst-class:: public

	.. php:method:: public runBare()
	
		.. rst-class:: phpdoc-description
		
			| Runs the bare test sequence\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit_AgileTestCase.php#15 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit_AgileTestCase.php#L15>`_
		
		
		:Returns: null 
	
	

.. rst-class:: public

	.. php:method:: public callProtected( $obj, $name, $args=\[\])
	
		.. rst-class:: phpdoc-description
		
			| Calls protected method\.
			
			| NOTE: this method must only be used for low\-level functionality, not
			| for general test\-scripts\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit_AgileTestCase.php#36 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit_AgileTestCase.php#L36>`_
		
		
		:Parameters:
			* **$obj** (object)  
			* **$name** (string)  
			* **$args** (array)  

		
		:Returns: mixed 
	
	

.. rst-class:: public

	.. php:method:: public getProtected( $obj, $name)
	
		.. rst-class:: phpdoc-description
		
			| Returns protected property value\.
			
			| NOTE: this method must only be used for low\-level functionality, not
			| for general test\-scripts\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit_AgileTestCase.php#56 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit_AgileTestCase.php#L56>`_
		
		
		:Parameters:
			* **$obj** (object)  
			* **$name** (string)  

		
		:Returns: mixed 
	
	

.. rst-class:: public

	.. php:method:: public testFake()
	
		.. rst-class:: phpdoc-description
		
			| Fake test\. Otherwise Travis gives warning that there are no tests in here\.
			
		
		:Source:
			`vendor/atk4/core/src/PHPUnit_AgileTestCase.php#68 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/PHPUnit_AgileTestCase.php#L68>`_
		
		
	
	

