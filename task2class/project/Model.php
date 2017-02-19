<?php


class Model
{

	public function __construct()
	{
		if(isset($GLOBALS['db'])){
			global $db;
			$this->db = $db;
		}
	}

	public function exec()
	{
		$querySql = $this->db->getSql();
		return  $this->db->exec($querySql);
	}
	public function execA()
	{
		$querySql = $this->db->getSql();
		$this->db->execA($querySql);
		//var_dump($querySql);
	}
}