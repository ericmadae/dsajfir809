<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_organisasi extends CI_Model {

		public function showTable()
		{
			$query ="SELECT * FROM `struktur_organisasi` ORDER BY `struktur_organisasi`.`id` ASC";
			$res = $this->db->query($query);
			return $res->result_array();
		}
		public function viewData($id)
		{
			return $this->db->get_where('struktur_organisasi', array('id'=>$id))->row();			
		}
		public function updateData($id, $data)
		{
			$this->db->where('id', $id);
			return $this->db->update('struktur_organisasi', $data);
		}
}

/* End of file m_organisasi.php */
/* Location: ./application/models/m_organisasi.php */