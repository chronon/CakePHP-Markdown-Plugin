CakePHP Markdown Helper Plugin
==============================

A [PHP Markdown](https://github.com/michelf/php-markdown/) helper packaged as a plugin, includes
php-markdown.php.

Installation:
-------------

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
