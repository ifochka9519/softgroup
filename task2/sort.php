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
if(isset($_POST['sort_club'])){
	$club->answ = '';
	$stmt = $dbh->query($club->show_all_clubs()."ORDER BY name");
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Club');
	foreach ($arr as $key => $value) {
		$club->answ = $club->answ.$value . "<br>";
		$club->answ = $club->answ."<br>";
	}

	echo $club->answ;
	$club->answ = '';
}
if(isset($_POST['sort_league'])){
	$league->answ = '';
	$stmt = $dbh->query($league->show_all_league()."ORDER BY name");
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'League');
	foreach ($arr as $key => $value) {
		$league->answ = $league->answ.$value . "<br>";
		$league->answ = $league->answ."<br>";
	}
	echo $league->answ;
	$league->answ = '';
}
if(isset($_POST['sort_stadium'])){
	$stadium->answ = '';
	$stmt = $dbh->query($stadium->show_all_stadium()."ORDER BY name");
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Stadium');
	foreach ($arr as $key => $value) {
		$stadium->answ = $stadium->answ.$value . "<br>";
		$stadium->answ = $stadium->answ."<br>";
	}

	echo $stadium->answ;
	$stadium->answ = '';
}
if(isset($_POST['sort_trophy'])){

	$trophy->answ = '';
	$stmt = $dbh->query($trophy->show_all_trothy()."ORDER BY name");
	$arr = $stmt->fetchAll(PDO::FETCH_CLASS, 'Trophy');
	foreach ($arr as $key => $value) {
		$trophy->answ = $trophy->answ.$value . "<br>";
		$trophy->answ = $trophy->answ."<br>";
	}

	echo $trophy->answ;
	$trophy->answ = '';
}

