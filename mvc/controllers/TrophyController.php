<?php

include_once ROOT.'/models/Trophy.php';
include_once ROOT.'/models/Club.php';
include_once ROOT.'/helpers/Cleaner.php';

class TrophyController
{
	public static function actionIndex($tmp = '', $sumbol = '')
	{
		$trophyList = array();

		$trophyList = Trophy::getTrophyList($tmp,$sumbol);

		require_once ROOT . '/views/trophy/index.php';

		return true;
	}

	public static function actionClubs($id)
	{
		$trophyClub = array();
		$trophyClub = Club::getClubById($id, 'trophy');

		require_once ROOT . '/views/trophy/clubs.php';
		return true;
	}

	public static function actionDelete($id)
	{
		Trophy::deleteTrophyById($id);
		header("Location:". HOST . 'trophy');
	}

	public static function actionNew(){
		$e = '';
		$name = '';
		$year = '';
		$rightData = true;
		if(isset($_POST['add'])) {
			if (!Cleaner::cleanYear($_POST['year'])) {
				$e .= 'Wrong year! ';
				$rightData = false;
			} else {
				$year = $_POST['year'];
			}
			if (!Cleaner::cleanText($_POST['name'])) {
				$e .= 'Wrong name! ';
				$rightData = false;
			} else {
				$name = $_POST['name'];
			}
			if ($rightData) {
				Trophy::newTrophy($_POST);
				header("Location:" . HOST . 'trophy');
			}
		}

		require_once ROOT.'/views/trophy/new.php';

		return true;
	}
}