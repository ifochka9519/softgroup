<?php

require_once '../project/Display.php';
require_once '../entities/Country.php';
class CountryDisplayer extends Display
{
	public $countryArr = [];


	public function __construct()
	{
		parent::__construct('countries');
	}





	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->countryArr[$items] = new Country($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->countryArr[$items] = new Country($item);

			}
		}

	}

}