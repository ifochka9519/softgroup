<?php


class City
{

	public static function getName()
	{
		$db = Db::getConnection();


		$citiesNameList = array();

		$sql = "SELECT cities.name AS name, cities.id as id
 							  FROM  cities 
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$citiesNameList[$i]['name'] = $row['name'];
			$citiesNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $citiesNameList;
	}
}