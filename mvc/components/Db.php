<?php

class Db
{

	private static $db = null;

	public static function getConnection()
	{
		$paramPath = ROOT.'/config/db_params.php';
		$params = include_once $paramPath;
		if (self::$db === null)
			self::$db = new PDO($params['dsn'], $params['user'], $params['password']);

		return self::$db;
	}
}