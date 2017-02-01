<?php

require_once __DIR__ . '/../project/Adder.php';
require_once __DIR__ . '/../entities/Club.php';


$add = new Adder();
if (isset($_POST['newclub'])) {
	$newClub = new Club();
	$newClub->setIdCity($_POST['city']);
	$newClub->setName($_POST['name']);
	$newClub->setYear($_POST['founded']);
	$newClub->setRevenue($_POST['revenue']);
	$newClub->setIdStadium($_POST['stadium']);
	$newClub->setIdPresident($_POST['president']);
	$newClub->setIdLeague($_POST['league']);

	$add->addClub($newClub);
	$add->add();
}

header("Location: ../index.php");