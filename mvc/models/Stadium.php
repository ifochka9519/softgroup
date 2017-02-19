<?php


class Stadium
{

	public static function getStadiumsList($tmp, $sumbol)
	{
		$db = Db::getConnection();


		$stadiumsList = array();


		$sql = "SELECT stadiums.id AS id, stadiums.name AS name,cities.name AS city, year
 							  FROM stadiums, cities 
 							  WHERE stadiums.id_city = cities.id
 							  ";


		if ($tmp == ''){
			$result = $db->query("$sql");
		}


		if ($tmp == 'sort') {
			$result = $db->query("$sql" .
				"ORDER BY ".$sumbol
			);
		}


		if ($tmp == 'search') {
			$result = $db->query("$sql" .
				"AND LOCATE('$sumbol' , stadiums.name) > 0 
 							  ");
		}

		$i = 0;

		while ($row = $result->fetch()) {
			$stadiumsList[$i]['id'] = $row['id'];
			$stadiumsList[$i]['name'] = $row['name'];
			$stadiumsList[$i]['city'] = $row['city'];
			$stadiumsList[$i]['year'] = $row['year'];
			$i++;
		}
		return $stadiumsList;
	}


	public static function getName()
	{
		$db = Db::getConnection();


		$stadiumsNameList = array();

		$sql = "SELECT stadiums.name AS name, stadiums.id AS id
 							  FROM  stadiums
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$stadiumsNameList[$i]['name'] = $row['name'];
			$stadiumsNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $stadiumsNameList;
	}

	public static function deleteStadiumById($id)
	{
		$db = Db::getConnection();

		$db->exec("DELETE FROM stadiums
				  WHERE stadiums.id = $id");
	}

	public static function newStadium($arr)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO stadiums(name, year, capacity, id_city)
				VALUES ('" . $arr['name'] . "','"
			. $arr['founded']. "','"
			. $arr['capacity']."','"
			. $arr['city'] .

			"')";

		$result = $db->exec($sql);


	}
}