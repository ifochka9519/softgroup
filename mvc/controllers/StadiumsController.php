<?php
include_once ROOT.'/models/Stadium.php';
include_once ROOT.'/models/Club.php';
include_once ROOT.'/models/City.php';
include_once ROOT.'/helpers/Cleaner.php';

class StadiumsController
{

	public function actionIndex($tmp = '', $sumbol = '')
	{
		$stadiumsList = array();

		$stadiumsList = Stadium::getStadiumsList($tmp,$sumbol);

		require_once ROOT.'/views/stadiums/index.php';

		return true;
	}

	public function actionClubs($id)
	{
		$stadiumsClub = array();
		$str = 'stadium';
		$stadiumsClub = Club::getClubById($id, $str);

		require_once ROOT . '/views/stadiums/clubs.php';
		return true;
	}

	public function actionDelete($id)
	{
		Stadium::deleteStadiumById($id);
		header("Location:". HOST . 'stadiums');
	}

	public function actionNew(){

		$e = '';
		$name = '';
		$year = '';
		$capacity = '';
		$rightData = true;
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
			if (!Cleaner::cleanNumber($_POST['capacity'])) {
				$e .= 'Wrong capacity! ';
				$rightData = false;
			}
			else{
				$capacity = $_POST['capacity'];
			}
			if($rightData){
				Stadium::newStadium($_POST);
				header("Location:" . HOST. "stadiums");
			}
		}
		$citiesNameList = City::getName();


		require_once ROOT.'/views/stadiums/new.php';
		return true;
	}
}