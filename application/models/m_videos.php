<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_videos extends CI_Model {
	public function showData()
	{
		return $this->db->get('tb_videos')->result_array();
	}
	public function addData($data)
	{
		return $this->db->insert('tb_videos', $data);
	}
	public function viewData($id)
	{
		return $this->db->get_where('tb_videos', array('id'=>$id))->row_array();		
	}
	public function updateData($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_videos', $data);	
	}
	public function deleteData($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tb_videos');
	}
}

/* End of file m_videos.php */
/* Location: ./application/models/m_videos.php */