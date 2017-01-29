<?php

class Club{
	var $id;
	var $name;
	var $city;
	var $league;
	var $answ;

	function __toString(){
		return "<form method='post' action='delete.php'>".
			"<input type=\"hidden\" name='id' id='id' value='".$this->id."'><br>".
			'Name : '.
			"<input type=\"text\" name='name' id='name' value='".$this->name."'><br>".
			'City : '.
			"<input type=\"text\" name='city' id='city' value='".$this->city."'><br>".
			'League : '.
			"<input type=\"text\" name='league' id='league' value='".$this->league."'><br>".
			"<input type=\"submit\" value='Delete' id='delete_club' name='delete_club'>"
			."</form><br>";
	}
	function show_all_clubs(){
		$sql = "SELECT clubs.id as id,clubs.name as name, cities.name as city, leagues.name as league
  		FROM  clubs, cities, leagues
  		WHERE clubs.id_city = cities.id AND clubs.id_league = leagues.id
  		";
		return $sql;
	}
	function delete_club($id){
		$sql = "DELETE FROM clubs
				WHERE clubs.id = '$id'";
		return $sql;
	}
}