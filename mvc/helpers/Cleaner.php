<?php


class Cleaner
{
	public static function cleanStr($str)
	{
		return trim(strip_tags(html_entity_decode($str,ENT_QUOTES)));
	}

	public static function cleanText($str)
	{
		$regexp = '#[A-Za-z A-Za-z0-9]+#';
		if(preg_match($regexp,$str)){
			return true;
		}
		else return false;
	}

	public static function cleanNumber($str)
	{
		$regexp = '#(\d+)#';
		if(preg_match($regexp,$str)){
			return true;
		}
		else return false;
	}
	public static function cleanYear($str)
	{
		$regexp = '#^(19|20)\d\d$#';
		$intStr = (int)$str;
		if((preg_match($regexp,$str))&&($intStr <= date("Y"))){
			return true;
		}
		else return false;
	}
}