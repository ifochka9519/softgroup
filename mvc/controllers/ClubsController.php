<?php

include_once ROOT . '/models/Club.php';
include_once ROOT . '/models/Trophy.php';
include_once ROOT . '/models/City.php';
include_once ROOT . '/models/Stadium.php';
include_once ROOT . '/models/League.php';
include_once ROOT . '/models/Persone.php';
include_once ROOT . '/helpers/Cleaner.php';

class ClubsController
{

	public function actionIndex($tmp = '', $sumbol = '')
	{
		$clubsList = array();
		//var_dump($tmp);

		$clubsList = Club::getClubsList($tmp, $sumbol);

		require_once ROOT . '/views/clubs/index.php';

		return true;
	}

	public function actionTrophy($id)
	{
		$clubsTrophy = array();
		$clubsTrophy = Trophy::getTrophyByClubId($id);

		require_once ROOT . '/views/clubs/trophy.php';
		return true;
	}

	public function actionDelete($id)
	{
		Club::deleteClubById($id);
		header("Location:" . HOST . 'clubs');
	}

	public function actionNew()
	{
		$rightData = true;
		$e = '';
		$name = '';
		$year = '';
		$revenue = '';
		if(isset($_POST['add'])){
			if (!Cleaner::cleanYear($_POST['founded'])) {
				$e .= 'Wrong year! ';
				$rightData = false;
			}
			else{
				$year = $_POST['founded'];
			}
			if (!Cleaner::cleanText($_POST['name'])) {
				$e .= 'Wrong name! ';
				$rightData = false;
			}
			else{
				$name= $_POST['name'];
			}
			if (!Cleaner::cleanNumber($_POST['revenue'])) {
				$e .= 'Wrong revenue! ';
				$rightData = false;
			}
			else{
				$revenue = $_POST['revenue'];
			}
			if($rightData){
				Club::newClub($_POST);
				header("Location:" . HOST. "clubs");
			}
		}



		$citiesNameList = City::getName();
		$personeNameList = Persone::getName();
		$stadiumsNameList = Stadium::getName();
		$leaguesNameList = League::getName();

		require_once ROOT . '/views/clubs/new.php';

		return true;
	}


}