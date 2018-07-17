# PHPStorm Settings

1. [Live Templates](#live-templates)
2. [Coding Styles](#coding-styles)
3. [Code Inspections](#code-inspections)
4. [Keymaps](#keymaps)
5. [File & Code Template](#file-and-code-templates)

# Live Templates

These are our custom WordPress live templates for PhpStorm. We have devided them in two groups:
- PHP `templates/php.xml`
- WordPress `templates/wordpress.xml`

## Usage

* Download the files `php.xml` and `wordpress.xml`
* Copy them to `~/Library/Preferences/PhpStorm201{x}.{x}/templates` directory.
* Restart PhpStorm.
* The two groups 'PHP' and WordPress' will be activated by default. Disable any group or live template from PHPStorm Preferences > Editor > Live Templates.
* A list of available abbreviations that will trigger a live template can be found by selecting 'PHP' or WordPress' in PHPStorm Preferences > Editor > Live Templates.

# Coding Styles

This is our own WordPress coding styles for PhpStorm, forked from the WordPress.xml packaged with PhpStorm

## Usage

* Download the `codestyles/CodepressWordPress.xml` file.
* Copy it to `~/Library/Preferences/PhpStorm201{x}.{x}/codestyles` directory.
* Activate the scheme by selecting it in PHPStorm Preferences > Editor > Code Style.

# Code Inspections

This is our own WordPress code inspections format for PhpStorm

## Usage

* Download the `inspection/Codepress.xml` file.
* Copy it to `~/Library/Preferences/PhpStorm{xx}/inspection` directory.
* Activate the scheme by selecting 'Codepress' in PHPStorm Preferences > Editor > Inspections.

# Keymaps

This are our own PHP keymaps for PhpStorm taken from the Laracasts series

## Usage

* Download the `keymaps/Laracasts.xml` file.
* Copy it to `~/Library/Preferences/PhpStorm201{x}.{x}/keymaps` directory.
* Activate the keymap by selecting 'Laracasts' in PHPStorm Preferences > Keymap.

# File and Code Templates

This are our own PHP File templates for PhpStorm. 

## Usage

* Download the content of the `fileTemplates` directory.
* Copy it to `~/Library/Preferences/PhpStorm201{x}.{x}/fielTemplates` directory.
* Restart PhpStorm.

# Development

* Clone the repo.
* Symlink the file to the `~/Library/Preferences/PhpStorm{xx}/<directory>` directory:

	```
	$ cd ~/Library/Preferences/PhpStorm{xx}/<directory>
	$ ln -s /path_to_repo/<directory>/<filename>.xml
	```

* Restart PhpStorm.
* Make changes, submit pull requests etc.