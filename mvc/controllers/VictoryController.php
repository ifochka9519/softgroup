<?php
include_once ROOT.'/models/Club.php';
include_once ROOT.'/models/Victory.php';
include_once ROOT.'/models/Trophy.php';
include_once ROOT.'/helpers/Cleaner.php';

class VictoryController
{
	public function actionMain()
	{
		$victoryList = array();

		$victoryList = Victory::getVictoryList();
		require_once ROOT . '/views/victory/index.php';
	}
	public function actionNew()
	{
		$rightData = true;
		$e = '';
		if(isset($_POST['add'])){
			if (!Cleaner::cleanYear($_POST['year'])) {
				$e .= 'Wrong year! ';
				$rightData = false;
			}
			if($rightData){
				Victory::newVictory($_POST);
				header("Location:" . HOST. "victories");
			}

		}


		$clubsNameList = Club::getName();
		$trophyNameList = Trophy::getName();

		require_once ROOT . '/views/victory/new.php';
	}

}