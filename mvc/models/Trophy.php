<?php


class Trophy
{
	public static function getTrophyByClubId($id)
	{
		$db = Db::getConnection();
		$trophyList = array();

		$result = $db->query("SELECT trophy.name as name, victory.year as year
							FROM trophy, victory
							WHERE victory.id_trophy = trophy.id 
							AND victory.id_club = $id");

		$i = 0;

		while ($row = $result->fetch()) {
			$trophyList[$i]['trophy'] = $row['name'];
			$trophyList[$i]['year'] = $row['year'];
			$i++;
		}
		return $trophyList;
	}




	public static function getTrophyList($tmp, $sumbol)
	{
		$db = Db::getConnection();


		$trophyList = array();


		$sql = "SELECT trophy.id AS id, trophy.name AS name,trophy.year as year
 							  FROM trophy
 							  ";


		if ($tmp == ''){
			$result = $db->query("$sql");
		}


		if ($tmp == 'sort'){
			$result = $db->query("$sql" .
				"ORDER BY ".$sumbol
			);
		}


		if ($tmp == 'search') {
			$result = $db->query("$sql" .
				"WHERE LOCATE('$sumbol' , trophy.name) > 0 
 							  ");
		}

		$i = 0;

		while ($row = $result->fetch()) {
			$trophyList[$i]['id'] = $row['id'];
			$trophyList[$i]['name'] = $row['name'];
			$trophyList[$i]['year'] = $row['year'];
			$i++;
		}
		return $trophyList;
	}


	public static function deleteTrophyById($id)
	{
		$db = Db::getConnection();

		$db->exec("DELETE FROM trophy
				  WHERE trophy.id = $id");
	}

	public static function newTrophy($arr)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO trophy(name, year)
				VALUES ('" . $arr['name'] . "','"
			. $arr['year'].

			"')";

		$result = $db->exec($sql);


	}
	public static function getName()
	{
		$db = Db::getConnection();


		$trophyNameList = array();

		$sql = "SELECT trophy.name AS name, trophy.id as id
 							  FROM  trophy
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$trophyNameList[$i]['name'] = $row['name'];
			$trophyNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $trophyNameList;
	}
}