<?php

abstract class Entity
{
	protected $_table = '';
	protected $_db;

	public function __construct(Db $db)
	{
		$this->_db = $db;
	}

	public function select($fields, $condition = '1=1')
	{
		$data = array();
		$sql = 'SELECT'. $fields .' FROM '. $this->_table .' WHERE '. $condition;

		$this->_db->db_query($sql) or die ($this->_db->db_error());

		while($row  = $this->_db->db_fetch())
		{
			$data[] = $row;
		}

		return $data;
	}

	public function insert($fields)
   {
   
       $sql = 'INSERT'. $fields .' INTO ' . $this->_table;

       $result=$this->_db->db_query($sql) or die ($this->_db->db_error());
      return $result;
   }                                                                                                
	
    public function update($fields)
	{

       $result=$this->_db->db_query($sql) or die ($this->_db->db_error());
      return $result;

	}

	public function delete($id)
	{
      $sql='DELETE'. $id .' FROM '. $this->_table ;
      $result=$this->_db->db_query($sql) or die ($this->_db->db_error());
      return $result;

	}
}