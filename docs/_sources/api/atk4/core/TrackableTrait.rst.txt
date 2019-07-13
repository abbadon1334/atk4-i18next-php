.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


TrackableTrait
==============


.. php:namespace:: atk4\core

.. php:trait:: TrackableTrait


	.. rst-class:: phpdoc-description
	
		| If class implements that interface and is added into "Container",
		| then container will keep track of it\. This method can also
		| specify desired name of the object\.
		
	
	:Source:
		`vendor/atk4/core/src/TrackableTrait.php#10 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TrackableTrait.php#L10>`_
	
	:Used traits:
		:php:trait:`atk4\\core\\NameTrait` 
	

Properties
----------

.. php:attr:: public static _trackableTrait

	.. rst-class:: phpdoc-description
	
		| Check this property to see if trait is present in the object\.
		
	
	:Source:
		`vendor/atk4/core/src/TrackableTrait.php#19 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TrackableTrait.php#L19>`_
	
	:Type: bool 


.. php:attr:: public static owner

	.. rst-class:: phpdoc-description
	
		| Link to \(parent\) object into which we added this object\.
		
	
	:Source:
		`vendor/atk4/core/src/TrackableTrait.php#26 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TrackableTrait.php#L26>`_
	
	:Type: object 


.. php:attr:: public static short_name

	.. rst-class:: phpdoc-description
	
		| Name of the object in owner\'s element array\.
		
	
	:Source:
		`vendor/atk4/core/src/TrackableTrait.php#33 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TrackableTrait.php#L33>`_
	
	:Type: string 


Methods
-------

.. rst-class:: public

	.. php:method:: public getDesiredName()
	
		.. rst-class:: phpdoc-description
		
			| If name of the object is omitted then it\'s naturally to name them
			| after the class\. You can specify a different naming pattern though\.
			
		
		:Source:
			`vendor/atk4/core/src/TrackableTrait.php#41 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TrackableTrait.php#L41>`_
		
		
		:Returns: string 
	
	

.. rst-class:: public

	.. php:method:: public destroy()
	
		.. rst-class:: phpdoc-description
		
			| Removes object from parent, so that PHP\'s Garbage Collector can
			| dispose of it\.
			
		
		:Source:
			`vendor/atk4/core/src/TrackableTrait.php#50 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/TrackableTrait.php#L50>`_
		
		
	
	

