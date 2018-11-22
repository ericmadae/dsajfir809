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
	function viewData($id)
	{
		return $this->db->get_where($table, array('id'=>$id))->row_array();
	}

}

/* End of file m_stk.php */
/* Location: ./application/models/m_stk.php */