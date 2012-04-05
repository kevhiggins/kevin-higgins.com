<?php
/**
 * KHtml is a collection of methods to make outputting certain HTML code easier.
 */
class KHtml extends CHtml
{
	/**
	 * Returns an anchor tag with mirrored href and content.
	 * @param String $href
	 */
	public function quickLink($href)
	{
		return CHtml::link($href, $href);
	}
}