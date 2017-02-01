<?php
require_once '../project/Display.php';
require_once '../entities/Stadium.php';

class StadiumDisplayer extends Display
{
	public $stadiumsArr = [];


	public function __construct()
	{
		parent::__construct('stadiums');
	}





	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->stadiumsArr[$items] = new Stadium($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->stadiumsArr[$items] = new Stadium($item);

			}
		}

	}
}