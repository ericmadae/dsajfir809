<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table3 extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_stk');
	}

	public function index()
	{
		$data['menu'] = 'statistik';
		$data['submenu']= 'KK';
		$data['kesejahtraan']=$this->m_stk->showData("jml_keluarga_sejahtera");
		$this->template->load('adminlte', 'v_table3', $data);
	}
	public function tambah()
	{
		$data = array(
			'desa_kelurahan'=> $_POST['desa_kelurahan'],
			'pra_s'		=> $_POST['pra_s'],
			'ks_I' 	=> $_POST['ks_I'],
			'ks_II_III' 	=> $_POST['ks_II_III'],
			'jumlah' 	=> $_POST['pra_s']+$_POST['ks_I']+ $_POST['ks_II_III'],

		);
		$res = $this->m_stk->addData("jml_keluarga_sejahtera", $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dimasukan');
			redirect('statistik/table3');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dimasukan');
			redirect('statistik/table3');
		}
	}
	public function lihatdata($id)
	{
		$data['menu'] = 'statistik';
		$data['submenu']= 'KK';
		$data['kesejahtraan']=$this->m_stk->showData("jml_keluarga_sejahtera");
		$data['info']=$this->m_stk->viewData("jml_keluarga_sejahtera",$id);
		$this->template->load('adminlte', 'ev_table3', $data);
	}
	public function ubahdata()
	{
		$id = $_POST['id'];
		$data = array(
			'desa_kelurahan'=> $_POST['desa_kelurahan'],
			'pra_s'		=> $_POST['pra_s'],
			'ks_I' 	=> $_POST['ks_I'],
			'ks_II_III' 	=> $_POST['ks_II_III'],
			'jumlah' 	=> $_POST['pra_s']+$_POST['ks_I']+ $_POST['ks_II_III'],

		);
		$res = $this->m_stk->updateData("jml_keluarga_sejahtera", $id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil diubah');
			redirect('statistik/table3');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal diubah');
			redirect('statistik/table3');
		}
	}
	public function hapusdata($id)
	{
		$res = $this->m_stk->deleteData("jml_keluarga_sejahtera", $id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil hapus');
			redirect('statistik/table3');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal hapus');
			redirect('statistik/table3');
		}
	}

}

/* End of file table3.php */
/* Location: ./application/controllers/statistik.php/table3.php */