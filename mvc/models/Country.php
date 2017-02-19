<?php


class Country
{

	public static function getName()
	{
		$db = Db::getConnection();


		$countriesNameList = array();

		$sql = "SELECT countries.name AS name, countries.id as id
 							  FROM  countries 
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$countriesNameList[$i]['name'] = $row['name'];
			$countriesNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $countriesNameList;
	}
}