<?php


class MainController
{
	public static function actionIndex()
	{
		require_once ROOT.'/views/index.php';

		return true;
	}

}