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
if(isset($_POST['delete_club'])){
	$sql = $club->delete_club($_POST['id']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['trophy_club'])){
	$stmt = $dbh->query($club->show_all_trophy($_POST['id']));
	$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($arr as $item){
		foreach ($item as $value){
			echo ($value);
			echo ("<br>");
		}
		echo ("<br>");
	}
}
if(isset($_POST['delete_league'])){
	$sql = $league->delete_league($_POST['id']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['league_club'])){
	$stmt = $dbh->query($league->show_all_clubs($_POST['id']));
	$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($arr as $item) {
		foreach ($item as $value) {
			echo($value);
			echo("<br>");
		}
		echo("<br>");
	}
}
if(isset($_POST['delete_stadium'])){
	$sql = $stadium->delete_stadium($_POST['id']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}

if(isset($_POST['stadium_club'])){
	$stmt = $dbh->query($stadium->show_all_clubs($_POST['id']));
	$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($arr as $item) {
		foreach ($item as $value) {
			echo($value);
			echo("<br>");
		}
		echo("<br>");
	}
}

if(isset($_POST['delete_trophy'])){
	$sql = $trophy->delete_trophy($_POST['id']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['victory_club'])){
	$stmt = $dbh->query($trophy->show_all_clubs($_POST['id']));
	$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
	foreach ($arr as $item) {
		foreach ($item as $value) {
			echo($value);
			echo("<br>");
		}
		echo("<br>");
	}
}