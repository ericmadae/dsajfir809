<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelurahan extends CI_Model {

	public function showTable()
	{
		return $this->db->get('tb_kelurahan')->result_array();
	}

}

/* End of file m_kelurahan.php */
/* Location: ./application/models/m_kelurahan.php */