﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _upgrade-guide:

Upgrade Guide
-------------

.. only:: html

	.. contents:: Within this page
		:local:
		:depth: 3



Upgrade from 1.0.x to 1.1.0
^^^^^^^^^^^^^^^^^^^^^^^^^^^

Changelog
"""""""""

https://github.com/fnagel/t3extblog/compare/1.0.1...1.1.0

- Improved FlashMessage ViewHelper

- Better localization in backend

- Improved backend module

- Bugfixes


How to upgrade
""""""""""""""

**Templating**

Some comment related partials and code parts have been changed.
Please make sure to adapt these changes in your templates.

Some backend module templates have been changed too.

**FlashMessage**

FlashMessage VH now extends the the Fluid default one. No more :code:`h5` and :code:`p` tags,
just some additional CSS classes for Bootstrap and the Fluid default :code:`ul` or :code:`div` mode.
Note that the error partial has changed accordingly.

Make sure styling still matches your needs as the HTML is slightly different now.

**Backend localization**

Some backend localization keys might have changed. Please check your overriding configuration.



Upgrade from 1.0.0 to 1.0.1
^^^^^^^^^^^^^^^^^^^^^^^^^^^

Changelog
"""""""""

https://github.com/fnagel/t3extblog/compare/1.0.0...1.0.1

- Removed EXT:sfantispam

- Improved documentation

- Fix integration for EXT:dd_googlesitemap

- Better extension and record icons

- Bugfixes


How to upgrade
""""""""""""""

*no changes required*


Upgrade from EXT:t3blog
^^^^^^^^^^^^^^^^^^^^^^^

Please see :ref:`Replace T3blog <replace-t3blog>`.