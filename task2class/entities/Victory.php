<?php


class Victory
{
	private $_id;
	private $_year;
	private $_id_trophy;
	private $_id_club;


	public function __construct($arr)
	{
			foreach ($arr as $key => $value) {
				if ($key == 'id') {
					$this->setId($value);
				}
				if ($key == 'year') {
					$this->setYear($value);
				}
				if ($key == 'id_club') {
					$this->setIdClub($value);
				}
				if ($key == 'id_trophy') {
					$this->setIdTrophy($value);
				}

			}
		}



	public function getId()
	{
		return $this->_id;
	}

	public function getIdClub()
	{
		return $this->_id_club;
	}


	public function getIdTrophy()
	{
		return $this->_id_trophy;
	}

	public function getYear()
	{
		return $this->_year;
	}


	public function setId($id)
	{
		$this->_id = $id;
	}


	public function setIdClub($id_club)
	{
		$this->_id_club = $id_club;
	}


	public function setIdTrophy($id_trophy)
	{
		$this->_id_trophy = $id_trophy;
	}


	public function setYear($year)
	{
		$this->_year = $year;
	}
}