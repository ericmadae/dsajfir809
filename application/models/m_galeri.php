<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galeri extends CI_Model {
	public function showData()
	{
		return $this->db->get('galeri')->result_array();
	}
	public function addData($data)
	{
		return $this->db->insert('galeri', $data);
	}
	public function viewData($id)
	{
		return $this->db->get_where('galeri', array('id'=>$id))->row_array();		
	}
	public function updateData($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('galeri', $data);	
	}
}

/* End of file m_galeri.php */
/* Location: ./application/models/m_galeri.php */