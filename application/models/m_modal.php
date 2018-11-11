<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_modal extends CI_Model {

	public function infoAkun($username)
		{
			$res = $this->db->get_where('tb_login', array('username'=>$username));
			return $res->row();
		}	
	public function updateUser($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('tb_login', $data);
	}

}

/* End of file m_modal.php */
/* Location: ./application/models/m_modal.php */