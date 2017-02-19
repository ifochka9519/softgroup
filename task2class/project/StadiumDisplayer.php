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


	public function getCityName(Stadium $s)
	{
		$this->db->select('cities.name');
		$this->db->from('cities');
		$this->db->condinition('cities.id', '=', $s->getIdCity());
		return $this->exec()[0]['name'];
	}

	public function getClubs($id)
	{
		$this->db->select('clubs.name, clubs.year');
		$this->db->from('clubs');
		$this->db->condinition('clubs.id_stadium', '=', $id);
		return $this->exec();
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