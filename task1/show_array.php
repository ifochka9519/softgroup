<?php
function shows($big_arr){
	$std = 1;
	foreach ($big_arr as $club => $arrw){
		echo "<div id=\"club.$std\"<br>";
		echo "<h2>Club №.$std</h2>";

		foreach ($arrw as $key => $value){
			echo "<label for=\"txt\">$key</label><br>";
			echo "<input type=\"text\" id='txt' value=\"$value\"><br>";
		}

		$std++;
		echo "</div><br>";
	}
}