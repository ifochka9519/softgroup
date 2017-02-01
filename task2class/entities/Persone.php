<?php


class Persone
{
	private $_id;
	private $_name;

	public function __construct($arr)
	{
		foreach ($arr as $key => $value) {
			if ($key == 'id') {
				$this->setId($value);
			}
			if ($key == 'name') {
				$this->setName($value);
			}

		}
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