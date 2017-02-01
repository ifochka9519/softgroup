<?php

require_once '../project/Display.php';

class Sort extends Model
{
	public $arr = array();
	public function __construct($table, $value)
	{
		parent ::__construct();
		$this->db->clear();
		$this->db->from($table);
		$this->db->orderBy($value);
		$this->arr = $this->exec();
	}

}