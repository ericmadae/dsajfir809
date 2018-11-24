<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_stk extends CI_Model {

	public function showData($table)
		{
		return	$this->db->get($table)->result_array();
		}
	public function addData($table, $data)
	{
		return $this->db->insert($table, $data);
	}
	function viewData($table, $id)
	{
		return $this->db->get_where($table, array('id'=>$id))->row_array();
	}
	public function updateData($table, $id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($table, $data);		
	}
	public function deleteData($table, $id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($table);
	}
	public function stk_pengunjung()
	{
		$ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
		$tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
		$waktu   = time(); //


		// Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
		$s = mysql_query("SELECT * FROM tb_pengunjung WHERE ip='$ip' AND tanggal='$tanggal'");

		// Kalau belum ada, simpan data user tersebut ke database
		if(mysql_num_rows($s) == 0){
			mysql_query("INSERT INTO tb_pengunjung(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
		}
		// Jika sudah ada, update
		else{
			mysql_query("UPDATE tb_pengunjung SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
		}

		$sata['pengunjung']       = mysql_num_rows(mysql_query("SELECT * FROM tb_pengunjung WHERE tanggal='$tanggal' GROUP BY ip")); // Hitung jumlah pengunjung
		$data['totalpengunjung']  = mysql_result(mysql_query("SELECT COUNT(hits) FROM tb_pengunjung"), 0); // hitung total pengunjung
		$bataswaktu       = time() - 300;
		$data['pengunjungonline'] = mysql_num_rows(mysql_query("SELECT * FROM tb_pengunjung WHERE online > '$bataswaktu'")); // hitung pengunjung onlinee
		return $data;
	}
}

/* End of file m_stk.php */
/* Location: ./application/models/m_stk.php */