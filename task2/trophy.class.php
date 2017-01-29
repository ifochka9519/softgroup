<?php
class Trophy{
	var $name;
	var $year;
	var $answ;

	function __toString(){

		return "<form method='post' action='delete.php'>" .
		'Name : ' .
		"<input type=\"text\" name='name' id='name' value='" . $this->name . "'><br>" .
		'Year : ' .
		"<input type=\"text\" name='year' id='year' value='" . $this->year . "'><br>" .
		"<input type=\"submit\" value='Delete' id='delete_trophy' name='delete_trophy'>"
		. "</form><br>";
	}
	function show_all_trothy(){
		$sql = "SELECT name, year
  		FROM  trophy
  		";
		return $sql;
	}
	function delete_trophy($name){
		$sql = "DELETE FROM trophy
				WHERE trophy.name = '$name'";
		return $sql;
	}
}