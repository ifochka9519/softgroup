<?php

require_once __DIR__ . '/../project/Adder.php';
require_once __DIR__ . '/../project/Cleaner.php';
require_once __DIR__ . '/../entities/Club.php';
require_once __DIR__ . '/../entities/League.php';
require_once __DIR__ . '/../entities/Stadium.php';
require_once __DIR__ . '/../entities/Trophy.php';


$add = new Adder();
if (isset($_POST['newclub'])) {
	$newClub = new Club();
	$newClub->setIdCity(Cleaner::cleanString($_POST['city']));
	$newClub->setName(Cleaner::cleanString($_POST['name']));
	$newClub->setYear(Cleaner::cleanString($_POST['founded']));
	$newClub->setRevenue(Cleaner::cleanString($_POST['revenue']));
	$newClub->setIdStadium(Cleaner::cleanString($_POST['stadium']));
	$newClub->setIdPresident(Cleaner::cleanString($_POST['president']));
	$newClub->setIdLeague(Cleaner::cleanString($_POST['league']));

	$add->addClub($newClub);
	$add->add();
}


if (isset($_POST['newleague'])) {
	$newLeague = new League();
	$newLeague->setIdCountry(Cleaner::cleanString($_POST['country']));
	$newLeague->setName(Cleaner::cleanString($_POST['name']));
	$newLeague->setTopPlace(Cleaner::cleanString($_POST['top_place']));
	$newLeague->setIdPresident(Cleaner::cleanString($_POST['president']));


	$add->addLeague($newLeague);
	$add->add();
	//var_dump($newLeague);
}

if (isset($_POST['newstadium'])) {
	$newStadium = new Stadium();
	$newStadium->setIdCity(Cleaner::cleanString($_POST['city']));
	$newStadium->setName(Cleaner::cleanString($_POST['name']));
	$newStadium->setYear(Cleaner::cleanString($_POST['year']));
	$newStadium->setCapacity(Cleaner::cleanString($_POST['capacity']));


	$add->addStadium($newStadium);
	$add->add();
}

if (isset($_POST['newtrophy'])) {
	$newTrophy = new Trophy();
	$newTrophy->setName(Cleaner::cleanString($_POST['name']));
	$newTrophy->setYear(Cleaner::cleanString($_POST['year']));



	$add->addTrophy($newTrophy);
	$add->add();
}

header("Location: ../index.php");