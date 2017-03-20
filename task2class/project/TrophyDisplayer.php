<?php

require_once '../project/Display.php';
require_once '../entities/Trophy.php';
class TrophyDisplayer extends Display
{
	public $trophyArr = [];


	public function __construct()
	{
		parent::__construct('trophy');
	}





	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->trophyArr[$items] = new Trophy($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->trophyArr[$items] = new Trophy($item);

			}
		}

	}

	public function getClubs($id)
	{
		$this->db->select('clubs.name, victory.year');
		$this->db->from('clubs,victory');
		$this->db->condinition('victory.id_trophy', '=', $id);
		$this->db->condinition('victory.id_club', '=', 'clubs.id');
		return $this->exec();
	}

}