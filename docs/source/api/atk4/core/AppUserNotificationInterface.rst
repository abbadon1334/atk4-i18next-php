.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


AppUserNotificationInterface
============================


.. php:namespace:: atk4\core

.. php:interface:: AppUserNotificationInterface


	.. rst-class:: phpdoc-description
	
		| App may implement this interface meaning that it is capable of properly
		| displaying user\-focused messages\.
		
		| Typically those messages will be displayed through the UI as Growl or
		| Notifications
		
	
	:Source:
		`vendor/atk4/core/src/AppUserNotificationInterface.php#12 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppUserNotificationInterface.php#L12>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public userNotification\($message, $context\)<atk4\\core\\AppUserNotificationInterface::userNotification\(\)>`


Methods
-------

.. rst-class:: public

	.. php:method:: public userNotification( $message, $context=\[\])
	
		.. rst-class:: phpdoc-description
		
			| This function will be called with a message that needs to be
			| displayed to user\.
			
		
		:Source:
			`vendor/atk4/core/src/AppUserNotificationInterface.php#20 <https://github.com/atk4/core/blob/master/vendor/atk4/core/src/AppUserNotificationInterface.php#L20>`_
		
		
		:Parameters:
			* **$message** (string)  

		
	
	

