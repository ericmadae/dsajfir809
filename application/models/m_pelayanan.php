<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelayanan extends CI_Model {

	public function showTable()
		{
			
			return $this->db->get('tb_pelayanan')->result_array();
		}
	public function addData($data)
		{
			return $this->db->insert('tb_pelayanan', $data);
		}
	public function viewData($id)
		{
			return $this->db->get_where('tb_pelayanan', array('id'=>$id))->row_array();
		}	
	public function updateData($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_pelayanan', $data);	
	}
	public function deleteData($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tb_pelayanan');
	}

}

/* End of file m_pelayanan.php */
/* Location: ./application/models/m_pelayanan.php */