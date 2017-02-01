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
	public function add(){
		$this->db->insertInto($this->_table, $this->_fields);
		$this->db->values($this->_values);
		//var_dump($this->db->getInsertInto());
		$this->execA();

	}

}