<?php

require_once '../project/Display.php';
require_once '../entities/City.php';
class CityDisplayer extends Display
{
	public $cityArr = [];


	public function __construct()
	{
		parent::__construct('cities');
	}





	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->cityArr[$items] = new City($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->cityArr[$items] = new City($item);

			}
		}

	}

}