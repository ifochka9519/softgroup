<?php

require_once '../project/Display.php';
require_once '../entities/Victory.php';


class VictoryDisplayer extends Display
{

	public $victoryArr = [];


	public function __construct()
	{
		parent::__construct('victory');
	}

	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->victoryArr[$items] = new Victory($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->victoryArr[$items] = new Victory($item);

			}
		}

	}
}