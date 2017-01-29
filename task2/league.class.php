<?php
class League{
	var $id;
	var $name;
	var $country;
	var $president_f;
	var $president_l;
	var $answ;

	function __toString(){
		return "<form method='post' action='delete.php'>".
			"<input type=\"hidden\" name='id' id='id' value='".$this->id."'><br>".
			'Name : '.
			"<input type=\"text\" name='name' id='name' value='".$this->name."'><br>".
			'Country : '.
			"<input type=\"text\" name='country' id='country' value='".$this->country."'><br>".
			'President First Name: '.
			"<input type=\"text\" name='president1' id='president1' value='".$this->president_f."'><br>".
			'President Last Name: '.
			"<input type=\"text\" name='president2' id='president2' value='".$this->president_l."'><br>".
			"<input type=\"submit\" value='Delete' id='delete_league' name='delete_league'>"
			."</form><br>";


			//'Name : '.$this->name.';'."<br>".'Country : '.$this->country.';'."<br>".'President : '.$this->president_f.' '.$this->president_l.'.'."<br>";
	}
	function show_all_league(){
		$sql = "SELECT leagues.id as id, leagues.name as name, countries.name as country, persone.first_name as president_f, persone.last_name as president_l
  		FROM  leagues, countries, persone
  		WHERE leagues.id_country = countries.id AND leagues.id_president = persone.id
  		";
		return $sql;
	}
	function delete_league($id){
		$sql = "DELETE FROM leagues
				WHERE leagues.id = '$id'";
		return $sql;
	}
}