<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}
	public function cek($where)
	{
		return $this->db->get_where('tb_login', $where);
	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */