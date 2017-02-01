<?php


class ActiveRecord
{
	private $_select = 'SELECT * ';
	private $_from = '';
	private $_join = '';
	private $_where = '';
	private $_groupBy = '';
	private $_orderBy = '';
	private $_limit = '';
	private $_delete = 'DELETE ';
	private $_tableUpdate = 'UPDATE ';
	private $_update = 'SET ';
	private $_insertInto = '';
	private $_values = '';

	private $_typeQuery = 'select';

	private $_lastEqualsWhere = '';

	//private $_prepared = [];

	public function __construct()
	{
	}


	public function select($select)
	{
		$this->_select = 'SELECT ' . $select . ' ';
	}

	public function from($from)
	{
		$this->_from = 'FROM ' . $from . ' ';
	}

	public function join($table, $condition, $type = 'INNER')
	{
		$this->_join = $type . ' JOIN ' . $table . ' ON ' . $condition . ' ';
	}

	public function insertInto($table, $fields)
	{
		$this->_insertInto = 'INSERT' . ' INTO' . ' ' . $table . '(' . $fields . ')';
	}

	public function values($value)
	{
		$this->_values = 'VALUES(' . $value . ')';
		$this->_typeQuery = 'insert';
	}

	public function limit($position, $count = '')
	{
		$this->_limit = 'LIMIT ' . $position;
		if ($count != '') {
			$this->_limit .= ', ' . $count . ' ';
		}
	}

	public function groupBy($groupBy)
	{
		$this->_groupBy = 'GROUP BY ' . $groupBy . ' ';
	}

	public function having($havingSql)
	{
		$this->_groupBy = 'HAVING ' . $havingSql . " ";
	}

	public function orderBy($orderBy, $sort = 'ASC')
	{
		$this->_orderBy = 'ORDER BY ' . $orderBy . ' ' . $sort . ' ';
	}

	public function condinition($field, $equals = '=', $value, $type = 'AND')
	{
		$this->_condition($field . $equals . $value, $type);
	}

	public function searcher($field)
	{
		$this->_where = $field;
	}

	public function in($field, $values, $type)
	{
		$this->_condition($field . ' IN (' . implode(',', $values) . ')', $type);
	}

	public function notIn($field, $values, $type)
	{
		$this->_condition($field . ' NOT IN (' . implode(',', $values) . ')', $type);
	}

	public function like($field, $value, $type)
	{
		$this->_condition($field . ' LIKE ' . $value, $type);
	}

	public function notLike($field, $value, $type)
	{
		$this->_condition($field . ' NOT LIKE ' . $value, $type);
	}

	public function delete($delete)
	{
		$this->_delete .= $delete;
		$this->_typeQuery = 'delete';
	}


	public function update($table, $updates)
	{
		$this->_tableUpdate .= $table;
		for ($i = 0; $i < count($updates); $i++) {
			$this->_update .= $updates[$i]['field'] . '=' . $updates[$i]['value'] . ',';
		}
		$this->_update = trim($this->_update, ',');
		$this->_typeQuery = 'update';
	}

	/*public function getPrepare()
	{
		return $this->_prepared;
	}

	public function addPrepare($key, $value)
	{
		$this->_prepared = array(
			"key" => $key,
			"vale" => $value
		);
	}

	public function addPrepares($prepared)
	{
		$this->_prepared = $prepared;
	}*/


	public function getSql()
	{
		if ($this->_where !== '') {
			$this->_where = "WHERE " . $this->_where . ' ';
		}

		if ($this->_typeQuery == 'select') {
			$sql = $this->_select . $this->_from . $this->_join . $this->_where . $this->_groupBy . $this->_orderBy . $this->_limit;
			return $sql;

		} elseif ($this->_typeQuery == 'insert') {
			$sql = $this->_insertInto.$this->_values;
			return $sql;
		}
		 elseif ($this->_typeQuery == 'update') {
			$sql = $this->_tableUpdate . $this->_update . $this->_where;
			return $sql;
		} elseif ($this->_typeQuery == 'delete') {
			$sql = $this->_delete . $this->_from . $this->_join . $this->_where;
			return $sql;
		}
	}

	private function _condition($condition, $type)
	{
		if ($this->_lastEqualsWhere !== '') {
			$this->_where .= ' ' . $this->_lastEqualsWhere . ' ';
		}
		$this->_where .= $condition;
		$this->_lastEqualsWhere = $type;
	}

	public function clear()
	{
		$this->_select = 'SELECT * ';
		$this->_from = '';
		$this->_join = '';
		$this->_where = '';
		$this->_groupBy = '';
		$this->_orderBy = '';
		$this->_limit = '';
		$this->_delete = 'DELETE ';
		$this->_tableUpdate = 'UPDATE ';
		$this->_update = 'SET ';

		$this->_typeQuery = 'select';

		$this->_lastEqualsWhere = '';
	}
}