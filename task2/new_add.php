<?php
include 'connect.php';
if (isset($_POST['newclub'])) {
	$msql = "SELECT cities.id
    		 FROM cities
    		 WHERE cities.name = '" . $_POST['city'] . "'";
	$stmt = $dbh->query($msql);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$city = $arr[0];


	$msqln = "SELECT persone.id
    		 FROM persone
    		 WHERE persone.first_name = '" . $_POST['president1'] . "' AND persone.last_name = '" . $_POST['president2'] . "'";
	$stmt = $dbh->query($msqln);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$president = $arr[0];


	$msqls = "SELECT id
             FROM stadiums
             WHERE stadiums.name = '" . $_POST['stadium'] . "'";
	$stmt = $dbh->query($msqls);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$stadium = $arr[0];


	$msqll = "SELECT id
            FROM leagues
            WHERE leagues.name = '" . $_POST['league'] . "'";
	$stmt = $dbh->query($msqll);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$league = $arr[0];


	$sql = "INSERT INTO clubs(name, id_city, id_league, year, id_president, id_stadium, revenue)
			VALUES ('" . $_POST['name'] . "','"
		. $city . "','"
		. $league . "','"
		. $_POST['founded'] . "','"
		. $president . "','"
		. $stadium . "','"
		. $_POST['revenue'] .
		"')";
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['newleague'])){
	$msql = "SELECT countries.id
    		 FROM countries
    		 WHERE countries.name = '" . $_POST['country'] . "'";
	$stmt = $dbh->query($msql);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$country = $arr[0];


	$msqln = "SELECT persone.id
    		 FROM persone
    		 WHERE persone.first_name = '" . $_POST['president1'] . "' AND persone.last_name = '" . $_POST['president2'] . "'";
	$stmt = $dbh->query($msqln);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$president = $arr[0];


	$sql = "INSERT INTO leagues(name, id_country, top_place, id_president)
			VALUES ('" . $_POST['name'] . "','"
		. $country . "','"
		. $_POST['top_place'] . "','"
		. $president .
		"')";
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['newstadium'])){
	$msql = "SELECT cities.id
    		 FROM cities
    		 WHERE cities.name = '" . $_POST['city'] . "'";
	$stmt = $dbh->query($msql);
	$arr = $stmt->fetch(PDO::FETCH_NUM);
	$city = $arr[0];

	$sql = "INSERT INTO stadiums(name, id_city, year, capacity)
			VALUES ('" . $_POST['name'] . "','"
		. $city . "','"
		. $_POST['founded'] . "','"
		. $_POST['capacity'] .
		"')";
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['newtrophy'])){
	$sql = "INSERT INTO trophy(name, year)
			VALUES ('" . $_POST['name'] . "','"
		 .$_POST['founded'].
		"')";
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
