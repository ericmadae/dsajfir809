<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelayanan');
	}
	public function index()
	{
		$data['submenu'] ='pelayanan';
		$data['pelayanan'] = $this->m_pelayanan->showTable();
		$this->template->load('adminlte', 'v_pelayanan', $data);
	}
	public function tambah()
	{
		$data = array(
			'pelayanan' => $_POST['pelayanan'],
			'persyaratan' => $_POST['persyaratan']
		);
		$res = $this->m_pelayanan->addData($data);
		if (res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil ditambahkan');
			redirect('pelayanan');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal ditambahkan');
			redirect('pelayanan');
		}
	}
	public function lihatdata($id)
	{
		$data['submenu'] ='pelayanan';
		$data['pelayanan'] = $this->m_pelayanan->showTable();
		$data['info']=$this->m_pelayanan->viewData($id);
		$this->template->load('adminlte', 'ev_pelayanan', $data);
	}
	public function ubahData($id)
	{
		$data = array(
			'pelayanan' => $_POST['pelayanan'],
			'persyaratan' => $_POST['persyaratan']
		);
		$res = $this->m_pelayanan->updateData($id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil diubah');
			redirect('pelayanan');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal diubah');
			redirect('pelayanan');
		}
	}
	public function hapusdata($id)
	{
		$res = $this->m_pelayanan->deleteData($id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dihapus');
			redirect('pelayanan');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
			redirect('pelayanan');
		}
	}

}

/* End of file pelayanan.php */
/* Location: ./application/controllers/pelayanan.php */