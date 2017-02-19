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


	public function getCountryName(League $l)
	{
		$this->db->select('countries.name');
		$this->db->from('countries');
		$this->db->condinition('countries.id', '=', $l->getIdCountry());
		return $this->exec()[0]['name'];
	}

	public function getClubs($id)
	{
		$this->db->select('clubs.name, clubs.year');
		$this->db->from('clubs');
		$this->db->condinition('clubs.id_league', '=', $id);
		return $this->exec();
	}


	public function makeArray($arr = [])
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