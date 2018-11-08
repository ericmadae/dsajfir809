<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_visimisi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function getProfil()
	{
		return $this->db->get_where('tb_profil', array('id'=>2)) ->row();
	}
	public function updateProf($id, $data)
	{
		$this->db->where('id', $id);
	return	$this->db->update('tb_profil', $data);		
	}

}

/* End of file m_sejarah.php */
/* Location: ./application/models/m_sejarah.php */