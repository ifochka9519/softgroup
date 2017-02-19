<?php

class Trophy
{
	private $_id;
	private $_name;
	private $_year;

	public function __construct($arr = [])
	{
		if (!empty($arr)) {
			foreach ($arr as $key => $value) {
				if ($key == 'id') {
					$this->setId($value);
				}
				if ($key == 'name') {
					$this->setName($value);
				}
				if ($key == 'year') {
					$this->setYear($value);
				}


			}
		}
	}


	public function setYear($year)
	{
		$this->_year = $year;
	}


	public function setName($name)
	{
		$this->_name = $name;
	}


	public function getId()
	{
		return $this->_id;
	}


	public function getName()
	{
		return $this->_name;
	}


	public function getYear()
	{
		return $this->_year;
	}

	public function setId($id)
	{
		$this->_id = $id;
	}
}