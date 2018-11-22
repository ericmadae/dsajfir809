<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table2 extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_stk');
	}

	public function index()
	{
		$data['menu'] = 'statistik';
		$data['submenu']= 'luas';
		$data['luas_daerah']=$this->m_stk->showData("luas_daerah");
		$this->template->load('adminlte', 'v_table2', $data);
	}
	public function tambah()
	{
		$data = array(
			'desa_kelurahan'=> $_POST['desa_kelurahan'],
			'luas'		=> $_POST['luas'],
			'sawah' 	=> $_POST['sawah'],
			'ladang' 	=> $_POST['ladang'],
			'rumah' 	=> $_POST['rumah'],
			'lainnya' 	=> $_POST['lainnya'],

		);
		$res = $this->m_stk->addData("luas_daerah", $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dimasukan');
			redirect('statistik/table2');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dimasukan');
			redirect('statistik/table2');
		}
	}
	public function lihatdata($id)
	{
		$data['menu'] = 'statistik';
		$data['submenu']= 'luas';
		$data['luas_daerah']=$this->m_stk->showData("luas_daerah");
		$data['info']=$this->m_stk->viewData("luas_daerah",$id);
		$this->template->load('adminlte', 'ev_table2', $data);
	}
	public function ubahdata()
	{
		$id = $_POST['id'];
		$data = array(
			'desa_kelurahan'=> $_POST['desa_kelurahan'],
			'luas'		=> $_POST['luas'],
			'sawah' 	=> $_POST['sawah'],
			'ladang' 	=> $_POST['ladang'],
			'rumah' 	=> $_POST['rumah'],
			'lainnya' 	=> $_POST['lainnya'],

		);
		$res = $this->m_stk->updateData("luas_daerah", $id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil diubah');
			redirect('statistik/table2');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal diubah');
			redirect('statistik/table2');
		}
	}
	public function hapusdata($id)
	{
		$res = $this->m_stk->deleteData("luas_daerah", $id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil hapus');
			redirect('statistik/table2');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal hapus');
			redirect('statistik/table2');
		}
	}

}

/* End of file table2.php */
/* Location: ./application/controllers/statistik.php/table2.php */