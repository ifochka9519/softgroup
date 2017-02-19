<?php
include_once ROOT . '/models/Country.php';
include_once ROOT . '/models/Club.php';
include_once ROOT . '/models/League.php';
include_once ROOT . '/models/Persone.php';
include_once ROOT . '/helpers/Cleaner.php';

class LeaguesController
{
	public function actionIndex($tmp = '', $sumbol = '')
	{
		$leaguesList = array();

		$leaguesList = League::getLeaguesList($tmp, $sumbol);

		require_once ROOT . '/views/leagues/index.php';

		return true;
	}

	public function actionClubs($id)
	{
		$leaguesClub = array();
		$leaguesClub = Club::getClubById($id, 'league');

		require_once ROOT . '/views/leagues/clubs.php';
		return true;
	}

	public function actionDelete($id)
	{
		League::deleteLeagueById($id);
		header("Location:" . HOST . 'leagues');
	}

	public function actionNew()
	{
		$e = '';
		$name = '';
		$place = '';
		$rightData = true;
		if(isset($_POST['add'])){
			if (!Cleaner::cleanText($_POST['name'])) {
				$e .= 'Wrong name! ';
				$rightData = false;
			}
			else{
				$name= $_POST['name'];
			}
			if (!Cleaner::cleanNumber($_POST['place'])) {
				$e .= 'Wrong place! ';
				$rightData = false;
			}
			else{
				$place = $_POST['place'];
			}

			if ($rightData) {
				League::newLeagues($_POST);
				header("Location:" . HOST . 'leagues');
			}
		}
		$countriesNameList = Country::getName();
		$personeNameList = Persone::getName();

		require_once ROOT . '/views/leagues/new.php';

		return true;
	}

}