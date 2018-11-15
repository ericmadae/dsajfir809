<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kontak extends CI_Model {

	public function showPesan()
	{	$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('kontak_masuk')->result_array();

	}
	public function viewData($id)
	{
		return $this->db->get_where('kontak_masuk', array('id'=>$id))->row_array();
	}
	public function updateData($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('kontak_masuk', $data);
	}
	public function deleteData($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('kontak_masuk');
	}

}

/* End of file m_kontak.php */
/* Location: ./application/models/m_kontak.php */