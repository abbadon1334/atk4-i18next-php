.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


AppScopeTrait
=============


.. php:namespace:: atk4\core

.. php:trait:: AppScopeTrait


	.. rst-class:: phpdoc-description
	
		| Typical software design will create the application scope\. Most frameworks
		| relies on "static" properties, methods and classes\. This does puts some
		| limitations on your implementation \(you can\'t have multiple applications\)\.
		
		| App Scope will pass the \'app\' property into all the object that you\'re
		| adding, so that you know for sure which application you work with\.
		
	
	:Source:
		`vendor/atk4/core/src/AppScopeTrait.php#13 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppScopeTrait.php#L13>`_
	

Properties
----------

.. php:attr:: public static _appScopeTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/AppScopeTrait.php#20 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppScopeTrait.php#L20>`_
	
	:Type: bool 


.. php:attr:: public static app

	.. rst-class:: phpdoc-description
	
		| Always points to current Application\.
		
	
	:Source:
		`vendor/atk4/core/src/AppScopeTrait.php#27 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppScopeTrait.php#L27>`_
	
	:Type: :any:`\\atk4\\ui\\App <atk4\\ui\\App>` 


.. php:attr:: public static max_name_length

	.. rst-class:: phpdoc-description
	
		| When using mechanism for ContainerTrait, they inherit name of the
		| parent to generate unique name for a child\. In a framework it makes
		| sense if you have a unique identifiers for all the objects because
		| this enables you to use them as session keys, get arguments, etc\.
		
		| Unfortunately if those keys become too long it may be a problem,
		| so ContainerTrait contains a mechanism for auto\-shortening the
		| name based around max\_name\_length\. The mechanism does only work
		| if AppScopeTrait is used, $app property is set and has a
		| max\_name\_length defined\.
		| 
		| Minimum is 20
		| 
		| See http://stackoverflow\.com/a/9399615/1466341 for more info\.
		
	
	:Source:
		`vendor/atk4/core/src/AppScopeTrait.php#47 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppScopeTrait.php#L47>`_
	
	:Type: int 


.. php:attr:: public static unique_hashes

	.. rst-class:: phpdoc-description
	
		| As more names are shortened, the substituted part is being placed into
		| this hash and the value contains the new key\. This helps to avoid creating
		| many sequential prefixes for the same character sequence\. Those
		| hashes can also be used to re\-build the long name of the object, but
		| this functionality is not essential and excluded from traits\. You
		| can find it in a test suite\.
		
	
	:Source:
		`vendor/atk4/core/src/AppScopeTrait.php#59 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppScopeTrait.php#L59>`_
	
	:Type: array 


