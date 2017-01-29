<?php

class Stadium
{
	var $id;
	var $name;
	var $capacity;
	var $city;
	var $year;
	var $answ;

	function __toString()
	{

		return "<form method='post' action='delete.php'>" .
			"<input type=\"hidden\" name='id' id='id' value='".$this->id."'><br>".
			'Name : ' .
			"<input type=\"text\" name='name' id='name' value='" . $this->name . "'><br>" .
			'Capacity : ' .
			"<input type=\"text\" name='capacity' id='capacity' value='" . $this->capacity . "'><br>" .
			'City : ' .
			"<input type=\"text\" name='city' id='city' value='" . $this->city . "'><br>" .
			'Year : ' .
			"<input type=\"text\" name='year' id='year' value='" . $this->year . "'><br>" .
			"<input type=\"submit\" value='Delete' id='delete_stadium' name='delete_stadium'>"
			. "</form><br>";



	}

	function show_all_stadium()
	{
		$sql = "SELECT stadiums.id as id, stadiums.name AS name ,stadiums.year AS year , stadiums.capacity AS capacity, cities.name AS city
  		FROM  stadiums, cities
  		WHERE stadiums.id_city = cities.id
  		";
		return $sql;
	}
	function delete_stadium($id){
		$sql = "DELETE FROM stadiums
				WHERE stadiums.id = '$id'";
		return $sql;
	}
}