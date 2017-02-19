<?php

class Stadium
{
	private $_id;
	private $_name;
	private $_year;
	private $_capacity;
	private $_idCity;


	public function __construct($arr = [])
	{
		if (!empty($arr)) {
		foreach ($arr as $key=>$value){
			if($key == 'id'){
				$this->setId($value);
			}
			if($key == 'name'){
				$this->setName($value);
			}
			if($key == 'id_city'){
				$this->setIdCity($value);
			}
			if($key == 'year'){
				$this->setYear($value);
			}
			if($key == 'capacity'){
				$this->setCapacity($value);
			}

		}}

	}


	public function setId($id)
	{
		$this->_id = $id;
	}


	public function getYear()
	{
		return $this->_year;
	}


	public function getId()
	{
		return $this->_id;
	}


	public function getCapacity()
	{
		return $this->_capacity;
	}


	public function getIdCity()
	{
		return $this->_idCity;
	}


	public function getName()
	{
		return $this->_name;
	}


	public function setCapacity($capacity)
	{
		$this->_capacity = $capacity;
	}


	public function setIdCity($idCity)
	{
		$this->_idCity = $idCity;
	}


	public function setName($name)
	{
		$this->_name = $name;
	}


	public function setYear($year)
	{
		$this->_year = $year;
	}
}