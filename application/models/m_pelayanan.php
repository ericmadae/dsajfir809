<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelayanan extends CI_Model {

	public function showTable()
		{
			
			return $this->db->get('tb_pelayanan')->row_array();
		}	

}

/* End of file m_pelayanan.php */
/* Location: ./application/models/m_pelayanan.php */