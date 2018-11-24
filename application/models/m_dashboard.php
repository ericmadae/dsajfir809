<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function pengunjung()
	{
		$sql = "SELECT tanggal, SUM(hits) as jml_pengunjung from tb_pengunjung GROUP BY tanggal";
		 return $this->db->query($sql)->result_array();


	}
	public function total()
	{
		$this->db->group_by('ip');
		return $this->db->get('tb_pengunjung')->num_rows();		
	}
	public function penilaian()
	{
		return $this->db->get('tb_penilaian')->result_array();
		
	}
	public function belumdibaca()
	{
		return $this->db->get_where('kontak_masuk', array('balasan'=> null))->num_rows();
	}
	public function online()
	{
		$bataswaktu       = time() - 300;
        $data = $this->db->query("SELECT * FROM tb_pengunjung WHERE online > '$bataswaktu'");
		$hasil = $data->num_rows();
		return $hasil;
	}
	
			// public function getId($username)
	// {
	// 	$res =$this->db->get_where('tb_login', array('username' => $username))->row();
	// 	return $res;
	// }
	// public function updateUser($id, $data)
	// {
	// 	$this->db->where('id', $id);
	// 	return $this->db->update('tb_login', $data);
	// }

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */