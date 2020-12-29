MAPBOX_UI module for Drupal
---------------------------

* Introduction
* Installation
* Creators
* Requirements
* configuration

INTRODUCTION
-----------

```
Please add the word counter to the body of article, for example in this case “(69 words)”

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
culpa qui officia deserunt mollit anim id est laborum. (69 words)

Do not add the word counter manually, the words should be counted automatically when saving
the article.

When an article is updated and the body content is changed, the word counter should reflect
these changes.

When editing an article the word counter may not be seen there, the body content in the textarea/
wysiwyg editor should be without the word counter.

The word counter should be visible everywhere except the edit view.

Add an admin config page to turn on/off the functionality. When off, the word counter should not
be displayed and saving articles should not execute the word calculation process.
- Drupal 8 or 9
- Adding tests would add more points
- Drupal coding standards should be met https://www.drupal.org/docs/develop/standards
- Add documentation (technical, end-user)
```

INSTALLATION:
-------------
Install as you would normally install a contributed Drupal module. See:
https://drupal.org/documentation/install/modules-themes/modules-8
for further information.

REQUIREMENTS
------------

Developend on:
- PHP 7.3.15
- Drupal 8.9.1

DEPENDENCIES
------------
Drupal standart installation should be fine.

CONFIGURATION
-------------
The configuration page is at /admin/config/zaproo/settings,
where you can configure the "Zaproo Counter" module.

UNINSTALLATION
--------------
1. Disable the module from 'administer >> modules'.
2. Uninstall the module

