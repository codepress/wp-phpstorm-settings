PhpStorm PHP and WordPress Live Templates
==========================================

These are our custom WordPress live templates for PhpStorm. We have devided them in two groups:
- PHP `php.xml`
- WordPress `wordpress.xml`

## Usage

* Download the files `php.xml` and `wordpress.xml`
* Copy them to `~/Library/Preferences/WebIde{xx}/templates` directory.
* Restart PhpStorm.
* The two groups 'PHP' and WordPress' will be activated by default. Disable any group or live template from PHPStorm Preferences > Editor > Live Templates.
* A list of available abbreviations that will trigger a live template can be found by selecting 'PHP' or WordPress' in PHPStorm Preferences > Editor > Live Templates.

## Development

* Clone the repo.
* Symlink each of the files from `~/Library/Preferences/WebIde{xx}/templates` directory:

	```
	$ cd ~/Library/Preferences/PhpStorm201{x}.{x}/templates
	$ ln -s /path/to/repo/php.xml
	$ ln -s /path/to/repo/wordpress.xml
	```

* Restart PhpStorm.
* Make changes, submit pull requests etc.