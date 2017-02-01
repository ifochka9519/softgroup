<?php

require_once '../project/Display.php';
require_once '../entities/Club.php';

class ClubsDisplayer extends Display
{
	public $clubsArr = [];


	public function __construct()
	{
		parent::__construct('clubs');
	}

	public function getCityName(Club $c)
	{
		$this->db->select('cities.name');
		$this->db->from('cities');
		$this->db->condinition('cities.id', '=', $c->getIdCity());
		return $this->exec()[0]['name'];
	}

	public function getLeagueName(Club $c)
	{
		$this->db->select('leagues.name');
		$this->db->from('leagues');
		$this->db->condinition('leagues.id', '=', $c->getIdLeague());
		return $this->exec()[0]['name'];
	}

	public function getStadiumName(Club $c)
	{
		$this->db->select('stadiums.name');
		$this->db->from('stadiums');
		$this->db->condinition('stadiums.id', '=', $c->getIdStadium());
		return $this->exec()[0]['name'];
	}

	public function getTrophy($id)
	{
		$this->db->select('trophy.name, victory.year');
		$this->db->from('trophy,victory');
		$this->db->condinition('victory.id_club', '=', $id);
		$this->db->condinition('victory.id_trophy', '=', 'trophy.id');
		return $this->exec();
	}



	public function makeArray($arr = [])
	{
		if (empty($arr)) {
			foreach ($this->_arr as $items => $item) {

				$this->clubsArr[$items] = new Club($item);

			}
		}
		else{
			foreach ($arr as $items => $item) {

				$this->clubsArr[$items] = new Club($item);

			}
		}

	}
}