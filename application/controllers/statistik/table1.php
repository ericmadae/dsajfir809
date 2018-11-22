<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table1 extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_stk');
	}

	public function index()
	{
		$data['menu'] = 'statistik';
		$data['submenu']= 'kependudukan';
		$data['penduduk']=$this->m_stk->showData("penduduk");
		$this->template->load('adminlte', 'v_table1', $data);
	}
	public function tambah()
	{
		$data = array(
			'desa_kelurahan'=> $_POST['desa_kelurahan'],
			'laki_laki'=> $_POST['laki_laki'],
			'perempuan'=> $_POST['perempuan'],
			'total' => $_POST['laki_laki']+$_POST['perempuan']
		);
		$res = $this->m_stk->addData("penduduk", $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dimasukan');
			redirect('statistik/table1');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dimasukan');
			redirect('statistik/table1');
		}
	}
	public function lihatdata($id)
	{
		$data['menu'] = 'statistik';
		$data['submenu']= 'kependuduk';
		$data['penduduk']=$this->m_stk->showData("penduduk");
		$data['info']=$this->m_stk->viewData("penduduk",$id);
		$this->template->load('adminlte', 'ev_table1', $data);
	}
	public function ubahdata()
	{
		$id = $_POST['id'];
		$data = array(
			'desa_kelurahan'=> $_POST['desa_kelurahan'],
			'laki_laki'=> $_POST['laki_laki'],
			'perempuan'=> $_POST['perempuan'],
			'total' => $_POST['laki_laki']+$_POST['perempuan']
		);
		$res = $this->m_stk->updateData("penduduk", $id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil diubah');
			redirect('statistik/table1');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal diubah');
			redirect('statistik/table1');
		}
	}
	public function hapusdata($id)
	{
		$res = $this->m_stk->deleteData("penduduk", $id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil hapus');
			redirect('statistik/table1');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal hapus');
			redirect('statistik/table1');
		}
	}

}

/* End of file table1.php */
/* Location: ./application/controllers/statistik.php/table1.php */