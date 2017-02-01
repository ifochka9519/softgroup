<?php

require_once '../project/Display.php';

class Search extends Model
{
	public $arr = array();
	public function __construct($table, $value)
	{
		parent ::__construct();
		$this->db->clear();
		$this->db->from($table);
		$this->db->searcher('LOCATE( \''.$value.'\',name)');
		$this->arr = $this->exec();
	}
}