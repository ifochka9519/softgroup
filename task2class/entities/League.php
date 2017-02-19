<?php


class League
{
	private $_id;
	private $_name;
	private $_idCountry;
	private $_topPlace;
	private $_idPresident;


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
				if ($key == 'id_country') {
					$this->setIdCountry($value);
				}
				if ($key == 'top_place') {
					$this->setTopPlace($value);
				}
				if ($key == 'id_president') {
					$this->setIdPresident($value);
				}

			}
		}
	}

	public function setName($name)
	{
		$this->_name = $name;
	}


	public function getName()
	{
		return $this->_name;
	}


	public function getId()
	{
		return $this->_id;
	}


	public function getIdCountry()
	{
		return $this->_idCountry;
	}


	public function getIdPresident()
	{
		return $this->_idPresident;
	}


	public function getTopPlace()
	{
		return $this->_topPlace;
	}


	public function setId($id)
	{
		$this->_id = $id;
	}


	public function setIdCountry($idCountry)
	{
		$this->_idCountry = $idCountry;
	}


	public function setIdPresident($idPresident)
	{
		$this->_idPresident = $idPresident;
	}


	public function setTopPlace($topPlace)
	{
		$this->_topPlace = $topPlace;
	}
}