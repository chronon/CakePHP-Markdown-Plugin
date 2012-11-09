<?php
App::uses('AppHelper', 'View/Helper');
App::import('Vendor', 'Markdown.markdown/markdown');

/**
 * MarkdownHelper - a CakePHP helper to output Markdown
 *
 * Uses php-markdown: https://github.com/michelf/php-markdown/
 *
 * @package MarkdownHelper
 * @version Release: 1.0
 * @author Gregory Gaskill <gregory@chronon.com>
 * @link http://technokracy.net
 */
class MarkdownHelper extends AppHelper {

/**
 * Converts markdown formatted plain text to HTML
 *
 * @param string $input The markdown formatted text.
 * @return string The converted HTML.
 * @access public
 * @throws CakeException if the php-markdown file can't be found/loaded.
 */
	public function md($input) {
		if (!function_exists('Markdown')) {
			throw new CakeException('The Markdown vendor file was not loaded.');
		}
		return Markdown($input);
	}

}