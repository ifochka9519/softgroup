<?php


class Persone
{
	public static function getName()
	{
		$db = Db::getConnection();


		$personeNameList = array();

		$sql = "SELECT persone.name AS name, persone.id AS id
 							  FROM  persone
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$personeNameList[$i]['name'] = $row['name'];
			$personeNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $personeNameList;
	}

}