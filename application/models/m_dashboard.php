<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getId($username)
	{
		$res =$this->db->get_where('tb_login', array('username' => $username))->row();
		return $res;
	}
	public function updateUser($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_login', $data);
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */