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
	$sql = $club->delete_club($_POST['name']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['delete_league'])){
	$sql = $league->delete_league($_POST['name']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['delete_stadium'])){
	$sql = $stadium->delete_stadium($_POST['name']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}
if(isset($_POST['delete_trophy'])){
	$sql = $trophy->delete_trophy($_POST['name']);
	echo $sql;
	$result = $dbh->exec($sql);
	header("Location: index.php");
}