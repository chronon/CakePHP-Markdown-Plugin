<?php
App::uses('MarkdownHelper', 'Markdown.View/Helper');
App::uses('View', 'View');
App::import('Vendor', array('file' => 'autoload'));

/**
 * MarkdownHelper Test Case
 *
 */
class MarkdownHelperTestCase extends CakeTestCase {
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$View = new View();
		$this->Markdown = new MarkdownHelper($View);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Markdown);

		parent::tearDown();
	}

/**
 * testMd method
 *
 * @return void
 */
	public function testMd() {
$input = "
## Hello

Here is something and it's really fun.

It's so fun, I'll **make a list**:

* This
* That
* More!

Checkout [Technokracy](http://technokracy.net) for free beer.
";

$expected = "<h2>Hello</h2>

<p>Here is something and it's really fun.</p>

<p>It's so fun, I'll <strong>make a list</strong>:</p>

<ul>
<li>This</li>
<li>That</li>
<li>More!</li>
</ul>

<p>Checkout <a href=\"http://technokracy.net\">Technokracy</a> for free beer.</p>
";
		$result = $this->Markdown->md($input);
		debug($result);

		$this->assertEquals($expected, $result);
	}


}