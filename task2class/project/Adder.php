<?php
require_once __DIR__ . '/../project/Project.php';
require_once ('../project/Model.php');
$project = new Project();
$project->loadDB();
class Adder extends Model
{
	private $_table;
	private $_fields;
	private $_values;

	private $_arr = [];
	public function __construct()
	{
		parent::__construct();
	}


	public function addClub(Club $club){
	$this->_table = 'clubs';
	$this->_fields = 'name, id_city, id_league, year, id_president, id_stadium, revenue';
	$this->_values ='\''.$club->getName().'\''.','.
		'\''.$club->getIdCity() .'\''. ','.
		'\''.$club->getIdLeague().'\'' . ','.
		'\''.$club->getYear().'\'' . ','.
		'\''.$club->getIdPresident().'\'' . ','.
		'\''.$club->getIdStadium().'\'' . ','.
		'\''.$club->getRevenue().'\'';
}

	public function addLeague(League $league){
		$this->_table = 'leagues';
		$this->_fields = 'name, id_country, top_place, id_president';
		$this->_values ='\''.$league->getName().'\''.','.
			'\''.$league->getIdCountry() .'\''. ','.
			'\''.$league->getTopPlace().'\'' . ','.
			'\''.$league->getIdPresident().'\'';
	}
	public function add(){
		$this->db->insertInto($this->_table, $this->_fields);
		$this->db->values($this->_values);
		//var_dump($this->_table);
		//var_dump($this->_fields);
		//var_dump($this->_values);
		$this->execA();

	}
	public function addStadium(Stadium $stadium){
		$this->_table = 'stadiums';
		$this->_fields = 'name, id_city, year, capacity';
		$this->_values ='\''.$stadium->getName().'\''.','.
			'\''.$stadium->getIdCity() .'\''. ','.
			'\''.$stadium->getYear().'\'' . ','.
			'\''.$stadium->getCapacity().'\'';
	}
	public function addTrophy(Trophy $trophy){
		$this->_table = 'trophy';
		$this->_fields = 'name, year';
		$this->_values ='\''.$trophy->getName().'\''.','.
			'\''.$trophy->getYear().'\'';
	}
}