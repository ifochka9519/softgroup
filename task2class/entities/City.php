<?php

/**
 * Created by PhpStorm.
 * User: Pepa
 * Date: 01.02.2017
 * Time: 14:58
 */
class City
{
	private $_id;
	private $_name;
	private $_idCountry;

	public function __construct($arr)
	{
		foreach ($arr as $key => $value) {
			if ($key == 'id') {
				$this->setId($value);
			}
			if ($key == 'name') {
				$this->setName($value);
			}
			if ($key == 'id_country') {
				$this->setIdCountry($value);
			}

		}
	}


	public function getIdCountry()
	{
		return $this->_idCountry;
	}


	public function setIdCountry($idCountry)
	{
		$this->_idCountry = $idCountry;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function getName()
	{
		return $this->_name;
	}


	public function setId($id)
	{
		$this->_id = $id;
	}


	public function setName($name)
	{
		$this->_name = $name;
	}

}