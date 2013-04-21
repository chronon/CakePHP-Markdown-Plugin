<?php
App::uses('AppHelper', 'View/Helper');

/**
 * MarkdownHelper - a CakePHP helper to output Markdown
 *
 * @package MarkdownHelper
 * @version Release: 2.1.0
 * @author Gregory Gaskill <gregory@chronon.com>
 * @link https://github.com/chronon/CakePHP-Markdown-Plugin
 */
class MarkdownHelper extends AppHelper {

/**
 * Converts markdown formatted plain text to HTML
 *
 * @param string $input The markdown formatted text.
 * @return string The converted HTML.
 * @access public
 * @throws CakeException if Markdown lib or Markdown function (vendor file) can't be found/loaded.
 */
	public function md($input) {
		// attempt to use the autoloaded class first
		if (class_exists('Michelf\Markdown')) {
			$Markdown = new Michelf\Markdown;
			return $Markdown->defaultTransform($input);
		}

		// autoload failed, try the included vendor file
		App::import('Vendor', 'Markdown.markdown/markdown');
		if (!function_exists('Markdown')) {
			throw new CakeException('The Markdown vendor file was not loaded.');
		}
		return Markdown($input);
	}

}