<?php
require_once '../project/Display.php';
require_once '../entities/Persone.php';

class PersoneDisplayer extends Display
{
	public $personeArr = [];


	public function __construct()
	{
		parent::__construct('persone');
	}





	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->personeArr[$items] = new Persone($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->personeArr[$items] = new Persone($item);

			}
		}

	}
}