<?php

class Club
{
	public static function getClubsList($tmp, $sumbol)
	{
		$db = Db::getConnection();


		$clubsList = array();


		$sql = "SELECT clubs.id AS id, clubs.name AS name,cities.name AS city, year
 							  FROM clubs, cities 
 							  WHERE clubs.id_city = cities.id
 							  ";


		if ($tmp == ''){
			$result = $db->query("$sql");
		}


		if ($tmp == 'sort') {
			$result = $db->query("$sql" .
				" ORDER BY ".$sumbol
			);
		}


		if ($tmp == 'search')  {
			$result = $db->query("$sql" .
				" AND LOCATE('$sumbol' , clubs.name) > 0 
 							  ");
		}

		$i = 0;

		while ($row = $result->fetch()) {
			$clubsList[$i]['id'] = $row['id'];
			$clubsList[$i]['name'] = $row['name'];
			$clubsList[$i]['city'] = $row['city'];
			$clubsList[$i]['year'] = $row['year'];
			$i++;
		}
		return $clubsList;
	}

	public static function deleteClubById($id)
	{
		$db = Db::getConnection();


		$db->exec("DELETE FROM clubs
				  WHERE clubs.id = $id");
	}

	public static function newClub($arr)
	{

		$db = Db::getConnection();

		$sql = "INSERT INTO clubs(name, id_city, id_league, year, id_president, id_stadium, revenue)
				VALUES ('" . $arr['name'] . "','"
		. $arr['city'] . "','"
		. $arr['league'] . "','"
		. $arr['founded']. "','"
		. $arr['president'] . "','"
		. $arr['stadium'] . "','"
		. $arr['revenue'].
		"')";

		$result = $db->exec($sql);


	}

	public static function getClubById($id, $value)
	{
		$db = Db::getConnection();
		$clubsList = array();
		$sql = "SELECT clubs.name as name
							FROM clubs";

		if($value == 'trophy'){
			$sql .= ", victory WHERE victory.id_club = clubs.id AND victory.id_trophy = $id";
		}
		else{
			$sql .= " WHERE clubs.id_".$value." = $id";
		}

		$result = $db->query($sql);

		$i = 0;

		while ($row = $result->fetch()) {
			$clubsList[$i]['clubs'] = $row['name'];
			$i++;
		}
		return $clubsList;
	}
	public static function getName()
	{
		$db = Db::getConnection();


		$clubsNameList = array();

		$sql = "SELECT clubs.name AS name, clubs.id as id
 							  FROM  clubs 
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$clubsNameList[$i]['name'] = $row['name'];
			$clubsNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $clubsNameList;
	}

}