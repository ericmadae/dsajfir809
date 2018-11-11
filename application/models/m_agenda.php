<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

	public function showTable()
		{
			return $this->db->get('agenda')->result_array();
		}
	public function addData($data)
		{
			return $this->db->insert('agenda', $data);
		}	
	public function viewData($id)
		{
			return $this->db->get_where('agenda', array('id'=>$id))->row_array();
		}
	public function updateData($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('agenda', $data);
	}
	public function deleteData($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('agenda');
	}
}

/* End of file m_agenda.php */
/* Location: ./application/models/m_agenda.php */