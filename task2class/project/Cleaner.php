<?php


class Cleaner
{
	public static function cleanString($str)
	{
		return trim(strip_tags(html_entity_decode($str, ENT_QUOTES)));
	}
}