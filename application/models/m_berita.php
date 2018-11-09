<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function showBerita()
		{
		return $this->db->get('tb_berita')->result_array();
		}
	public function postBerita($data)
		{
		return $this->db->insert('tb_berita', $data);
		}	
	public function viewNews($id)
	{
		return $this->db->get_where('tb_berita', array('id'=>$id))->row_array();
	}
	public function updateBerita($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_berita', $data);
	}
	public function deleteBerita($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('tb_berita');
	}
}

/* End of file m_berita.php */
/* Location: ./application/models/m_berita.php */