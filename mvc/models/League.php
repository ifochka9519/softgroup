<?php


class League
{

	public static function getLeaguesList($tmp, $sumbol)
	{
		$db = Db::getConnection();


		$leagueList = array();


		$sql = "SELECT leagues.id AS id, leagues.name AS name,countries.name AS country, persone.name as president, leagues.top_place as place
 							  FROM leagues, persone, countries
 							  WHERE leagues.id_country = countries.id AND leagues.id_president = persone.id
 							  ";


		if ($tmp == '') {
			$result = $db->query("$sql");
		}


		if ($tmp == 'sort') {
			$result = $db->query("$sql" .
				"ORDER BY ".$sumbol
 							  );
		}


		if ($tmp == 'search') {
			$result = $db->query("$sql" .
				"AND LOCATE('$sumbol' , leagues.name) > 0 
 							  ");
		}

		$i = 0;

		while ($row = $result->fetch()) {
			$leagueList[$i]['id'] = $row['id'];
			$leagueList[$i]['name'] = $row['name'];
			$leagueList[$i]['country'] = $row['country'];
			$leagueList[$i]['place'] = $row['place'];
			$leagueList[$i]['president'] = $row['president'];
			$i++;
		}
		return $leagueList;
	}

	public static function getName()
	{
		$db = Db::getConnection();


		$leaguesNameList = array();

		$sql = "SELECT leagues.name AS name, leagues.id AS id
 							  FROM  leagues
 							  ";
		$result = $db->query("$sql");

		$i = 0;

		while ($row = $result->fetch()) {
			$leaguesNameList[$i]['name'] = $row['name'];
			$leaguesNameList[$i]['id'] = $row['id'];
			$i++;
		}
		return $leaguesNameList;
	}

	public static function deleteLeagueById($id)
	{
		$db = Db::getConnection();

		$db->exec("DELETE FROM leagues
				  WHERE leagues.id = $id");
	}

	public static function newLeagues($arr)
	{
		$db = Db::getConnection();

		$sql = "INSERT INTO leagues(name, id_country, top_place, id_president)
				VALUES ('" . $arr['name'] . "','"
			. $arr['country']. "','"
			. $arr['place']."','"
			. $arr['president'] .

			"')";

		$result = $db->exec($sql);


	}

}