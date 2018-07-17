# PHPStorm Settings

1. [Live Templates](#live-templates)
2. [Coding Styles](#coding-styles)
3. [Code Inspections](#code-inspections)

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

## Development

* Clone the repo.
* Symlink each of the files from `~/Library/Preferences/PhpStorm201{x}.{x}/templates` directory:

	```
	$ cd ~/Library/Preferences/PhpStorm201{x}.{x}/templates
	$ ln -s /path_to_repo/templates/php.xml
	$ ln -s /path_to_repo/templates/wordpress.xml
	```

* Restart PhpStorm.
* Make changes, submit pull requests etc.

# Coding Styles

This is our own WordPress coding styles for PhpStorm, forked from the WordPress.xml packaged with PhpStorm

## Usage

* Download the `codestyles/CodepressWordPress.xml` file.
* Copy it to `~/Library/Preferences/WebIde{xx}/codestyles` directory.
* Once downloaded activate the scheme by selecting it in PHPStorm Preferences > Editor > Code Style.

## Development

* Clone the repo.
* Symlink the `CodepressWordPress.xml` file in the code `~/Library/Preferences/PhpStorm201{x}.{x}/codestyles` directory:

	```
	$ cd ~/Library/Preferences/PhpStorm201{x}.{x}/codestyles
	$ ln -s /path_to_repo/codestyles/CodepressWordPress.xml
	```

* Restart PhpStorm.
* Activate the scheme by selecting 'Codepress WordPress' in PHPStorm Preferences > Editor > Code Style.
* Make changes, submit pull requests etc.

# Code Inspections

This is our own WordPress code inspections format for PhpStorm

## Usage

* Download the `inspectins/Codepress.xml` file.
* Copy it to `~/Library/Preferences/PhpStorm{xx}/inspection` directory.
* Once downloaded activate the scheme by selecting it in PHPStorm Preferences > Editor > Inspections.

## Development

* Clone the repo.
* Symlink the `Codepress.xml` file in the code `~/Library/Preferences/PhpStorm{xx}/inspection` directory:

	```
	$ cd ~/Library/Preferences/PhpStorm{xx}/inspection/inspection
	$ ln -s /path_to_repo/inspections/Codepress.xml
	```

* Restart PhpStorm.
* Activate the scheme by selecting 'Codepress' in PHPStorm Preferences > Editor > Inspections.
* Make changes, submit pull requests etc.
