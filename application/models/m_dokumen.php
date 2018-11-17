<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dokumen extends CI_Model {

	public function showTable()
	{
		return $this->db->get('dokumen')->result_array();
	}

	public function addData($data)
	{
		return $this->db->insert('dokumen', $data);
	}
	public function viewData($id)
	{
		return $this->db->get_where('dokumen', array('id'=>$id))->row_array();
	}
	public function deleteData($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('dokumen');		
	}
	

}

/* End of file m_dokumen.php */
/* Location: ./application/models/m_dokumen.php */