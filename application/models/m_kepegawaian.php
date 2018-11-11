<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kepegawaian extends CI_Model {

	public function showTables()
		{
			return $this->db->get('tb_kepegawaian')->result_array();
		}
	public function addData($data)
		{
			return $this->db->insert('tb_kepegawaian', $data);
		}
	public function viewData($id)
		{
			return $this->db->get_where('tb_kepegawaian', array('id'=>$id))->row_array();
		}
	public function updateData($id, $data)
		{
			$this->db->where('id', $id);
			return $this->db->update('tb_kepegawaian', $data);
		}
	public function deleteData($id)
		{
			$this->db->where('id', $id);
			return $this->db->delete('tb_kepegawaian');
		}	

}

/* End of file m_kepegawaian.php */
/* Location: ./application/models/m_kepegawaian.php */