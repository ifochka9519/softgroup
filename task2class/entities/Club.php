<?php

class Club
{
	private $_id;
	private $_name;
	private $_idCity;
	private $_idLeague;
	private $_year;
	private $_revenue;
	private $_idPresident;
	private $_idStadium;


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
				if ($key == 'id_city') {
					$this->setIdCity($value);
				}
				if ($key == 'id_league') {
					$this->setIdLeague($value);
				}
				if ($key == 'year') {
					$this->setYear($value);
				}
				if ($key == 'id_president') {
					$this->setIdPresident($value);
				}
				if ($key == 'id_stadium') {
					$this->setIdStadium($value);
				}
				if ($key == 'revenue') {
					$this->setRevenue($value);
				}

			}
		}
	}


	public function getId()
	{
		return $this->_id;
	}


	public function getIdCity()
	{
		return $this->_idCity;
	}


	public function getIdLeague()
	{
		return $this->_idLeague;
	}


	public function getIdPresident()
	{
		return $this->_idPresident;
	}


	public function getIdStadium()
	{
		return $this->_idStadium;
	}

	public function getName()
	{
		return $this->_name;
	}


	public function getRevenue()
	{
		return $this->_revenue;
	}


	public function getYear()
	{
		return $this->_year;
	}


	public function setId($id)
	{
		$this->_id = $id;
	}


	public function setIdCity($idCity)
	{
		$this->_idCity = $idCity;
	}


	public function setIdLeague($idLeague)
	{
		$this->_idLeague = $idLeague;
	}


	public function setIdPresident($idPresident)
	{
		$this->_idPresident = $idPresident;
	}


	public function setIdStadium($idStadium)
	{
		$this->_idStadium = $idStadium;
	}


	public function setName($name)
	{
		$this->_name = $name;
	}


	public function setRevenue($revenue)
	{
		$this->_revenue = $revenue;
	}


	public function setYear($year)
	{
		$this->_year = $year;
	}
}