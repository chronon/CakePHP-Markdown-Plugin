<?php
App::uses('AppHelper', 'View/Helper');

/**
 * MarkdownHelper - a CakePHP helper to output Markdown
 *
 * @package MarkdownHelper
 * @version Release: 2.0.0
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
 * @throws CakeException if Markdown lib can't be found/loaded.
 */
	public function md($input) {
		if (!class_exists('Michelf\Markdown')) {
			throw new CakeException('Markdown lib was not auto-loaded.');
		}
		$Markdown = new Michelf\Markdown;
		return $Markdown->defaultTransform($input);
	}

}