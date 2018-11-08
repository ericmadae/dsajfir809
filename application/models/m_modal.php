<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_modal extends CI_Model {

	public function v_modal()
		{
			$username = $this->session->userdata('username');
			$data['akun'] = $this->db->get_where('table', $, $limit, $offset);
		}	

}

/* End of file m_modal.php */
/* Location: ./application/models/m_modal.php */