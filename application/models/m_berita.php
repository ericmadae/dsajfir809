<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

	public function showBerita()
		{
		return $this->db->get('tb_berita')->result();
		}
	public function postBerita($data)
		{
		return $this->db->insert('tb_berita', $data);
		}	

}

/* End of file m_berita.php */
/* Location: ./application/models/m_berita.php */