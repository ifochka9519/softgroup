<?php


class Victory
{
	public static function newVictory($arr)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO victory(id_club,id_trophy, year)
				VALUES ('" . $arr['club'] . "','"
				. $arr['trophy'] . "','"
			. $arr['year'].

			"')";

		$result = $db->exec($sql);


	}

	public static function getVictoryList()
	{
		$db = Db::getConnection();


		$victoryList = array();


		$sql = "SELECT victory.id AS id, trophy.name AS trophy,clubs.name AS club, victory.year as year
 							  FROM victory,clubs,trophy
 							  WHERE victory.id_club = clubs.id 
 							  AND victory.id_trophy = trophy.id
 							  ";
		$result = $db->query("$sql");
		$i = 0;

		while ($row = $result->fetch()) {
			$victoryList[$i]['id'] = $row['id'];
			$victoryList[$i]['trophy'] = $row['trophy'];
			$victoryList[$i]['club'] = $row['club'];
			$victoryList[$i]['year'] = $row['year'];
			$i++;
		}
		return $victoryList;
	}

}