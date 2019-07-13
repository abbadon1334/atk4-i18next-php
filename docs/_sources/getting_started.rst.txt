
.. _getting_started:

Getting started
===============

Instantiate

.. code-block:: php

    $translator = new Translator();

Define root path for translations

.. code-block:: php

    $translator->setTranslationsPath('path/to/locales');

(optional) Define if filename has to be used has namespace

.. code-block:: php

    $translator->useFilenameAsNamespace(true);

(optional) Define namespaces priority

.. code-block:: php

    $translator->setNamespacePriority('firstNs','secondNs','otherNs');

Define primary and fallback language (name of the folders where library load files)

.. code-block:: php

    $translator->setLanguagePrimary($language);
    $translator->setLanguageFallback($fallback);

Add additional language

.. code-block:: php

    $translator->addLanguage('it');

Usage examples
--------------

.. code-block:: php
    :linenos:

    $result = $translator->_('definitionKey');
    $result = $translator->_('definitionKey', ['param1' => 'test']);
    $result = $translator->_('definitionKey', ['param1' => 'test'], 'context');
    $result = $translator->_('definitionKey', ['param1' => 'test'], 'context', 'specificLanguage');
    $result = $translator->_('namespace:definitionKey', ['param1' => 'test'], 'context', 'specificLanguage');

The TranslatorInterface
-----------------------

.. literalinclude:: ../../src/I18Next/TranslatorInterface.php
    :linenos:
    :language: php