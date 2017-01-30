<?php
include 'connect.php';
include 'club.class.php';
include 'league.class.php';
include 'trophy.class.php';
include 'stadium.class.php';
$club = new Club();
$league = new League();
$trophy = new Trophy();
$stadium = new Stadium();
if (isset($_POST['search_club'])) {
	$arr_big = [];
	$good = false;
	$smb = $_POST['sumb'];
	$club->answ = '';
	$stmt = $dbh->query($club->show_all_clubs());
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Club');
	foreach ($arr as $key => $value) {

		if (stripos($value->name, $smb) !== false) {
			$arr_big[$key] = $value;
			$good = true;
		}
	}
	if ($good == true) {
		foreach ($arr_big as $key => $value) {
			$club->answ = $club->answ . $value . "<br>";
			$club->answ = $club->answ . "<br>";
		}
		echo $club->answ;
		$club->answ = '';
	}
	else{
		echo ("Not found!");
	}
}

if(isset($_POST['search_league'])){
	$arr_big = [];
	$good = false;
	$smb = $_POST['sumb'];
	$league->answ = '';
	$stmt = $dbh->query($league->show_all_league());
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'League');
	foreach ($arr as $key => $value) {

		if (stripos($value->name, $smb) !== false) {
			$arr_big[$key] = $value;
			$good = true;
		}
	}
	if ($good == true) {
		foreach ($arr_big as $key => $value) {
			$league->answ = $league->answ . $value . "<br>";
			$league->answ = $league->answ . "<br>";
		}
		echo $league->answ;
		$league->answ = '';
	}
	else{
		echo ("Not found!");
	}
}
if(isset($_POST['search_stadium'])){
	$arr_big = [];
	$good = false;
	$smb = $_POST['sumb'];
	$stadium->answ = '';
	$stmt = $dbh->query($stadium->show_all_stadium());
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Stadium');
	foreach ($arr as $key => $value) {

		if (stripos($value->name, $smb) !== false) {
			$arr_big[$key] = $value;
			$good = true;
		}
	}
	if ($good == true) {
		foreach ($arr_big as $key => $value) {
			$stadium->answ = $stadium->answ . $value . "<br>";
			$stadium->answ = $stadium->answ . "<br>";
		}
		echo $stadium->answ;
		$stadium->answ = '';
	}
	else{
		echo ("Not found!");
	}
}
if(isset($_POST['search_trophy'])){

	$arr_big = [];
	$good = false;
	$smb = $_POST['sumb'];

	$trophy->answ = '';
	$stmt = $dbh->query($trophy->show_all_trothy());
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Trophy');
	foreach ($arr as $key => $value) {

		if (stripos($value->name, $smb) !== false) {
			$arr_big[$key] = $value;
			$good = true;
		}
	}
	if ($good == true) {
		foreach ($arr_big as $key => $value) {
			$trophy->answ = $trophy->answ . $value . "<br>";
			$trophy->answ = $trophy->answ . "<br>";
		}
		echo $trophy->answ;
		$trophy->answ = '';
	}
	else{
		echo ("Not found!");
	}
}
