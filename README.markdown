CakePHP Markdown Helper Plugin
==============================

A [PHP Markdown](https://github.com/michelf/php-markdown/) helper packaged as a plugin. 

This plugin works with [Composer](http://getcomposer.org) and is available on 
[Packagist](https://packagist.org/). 

Installation:
-------------

**Using [Composer](http://getcomposer.org/)/[Packagist](https://packagist.org):**

If you are using composer, require `chronon/markdown`:

```
{
    "require": {
        "chronon/markdown": "*"
    },
	"config": {
        "vendor-dir": "Vendor"
    }
}
```
This will install the plugin into `Plugin/Markdown`, and install Markdown lib (from Packagist) into
your `Vendor` directory.

In `Config/bootstrap.php`, import composer's autoload file:

```php
<?php
App::import('Vendor', array('file' => 'autoload'));
```

**Using git:**

If you are **not** using composer, clone the repository:

```sh
git clone git@github.com:chronon/CakePHP-Markdown-Plugin.git APP/Plugin/Markdown
```

Usage:
-----

In your controller: 

```php
<?php
public $helpers = array('Markdown.Markdown');
```

In your view:

```php
<?php
echo $this->Markdown->md(markdown_to_be_converted_to_html);
```
