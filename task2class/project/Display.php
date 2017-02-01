<?php


require_once '../project/Model.php';

class Display extends Model
{
	protected $_arr = array();
	public function __construct($table)
	{
		parent ::__construct();
		$this->db->from($table);
		$this->_arr = $this->exec();
	}

}