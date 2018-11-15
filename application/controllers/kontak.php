<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kontak extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kontak');
		
	}
	public function index()
	{
		$data['submenu'] = 'kontak';
		$data['kontak'] = $this->m_kontak->showPesan();
		$this->template->load('adminlte', 'v_kontak', $data);

	}
	public function lihatdata($id)
	{
		$data['submenu'] = 'kontak';
		$data['info'] = $this->m_kontak->viewData($id);
		$this->template->load('adminlte', 'ev_kontak', $data);	
	}
	public function ubahdata($id)
	{
		$data = array(
			'balasan' => $this->input->post('balasan'),
			'tgl_balasan' => date('Y m d')
		);
		 $this->m_kontak->updateData($id, $data);
		 $this->session->set_flashdata('infoss', 'Pesan berhasi dipost');
		 redirect('kontak');
	}
	public function hapusdata()
	{
		foreach ($_POST['id'] as $id) {
			$this->m_kontak->deleteData($id);
		}
		$this->session->set_flashdata('info', 'Data berhasil dihapus');
		redirect('kontak');
	}

}

/* End of file layanan.php */
/* Location: ./application/controllers/layanan.php */