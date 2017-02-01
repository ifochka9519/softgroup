<?php

require_once '../project/Display.php';
require_once '../entities/League.php';

class LeagueDisplayer extends Display
{
	public $leaguesArr = [];

	public function __construct($table = 'leagues')
	{
		parent::__construct($table);
	}

	public function makeArray()
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->leaguesArr[$items] = new League($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->leaguesArr[$items] = new League($item);

			}
		}

	}

}