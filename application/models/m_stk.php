<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stk extends CI_Model {

	public function showData($table)
		{
		return	$this->db->get($table)->result_array();
		}
	public function addData($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	function viewData($table, $id)
	{
		return $this->db->get_where($table, array('id'=>$id))->row_array();
	}
	public function updateData($table, $id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($table, $data);		
	}
	public function deleteData($table, $id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}
}

/* End of file m_stk.php */
/* Location: ./application/models/m_stk.php */