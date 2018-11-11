<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_agenda');
	}
	public function index()
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'agenda';
		$data['agenda'] = $this->m_agenda->showTable();
		$this->template->load('adminlte', 'v_agenda', $data);		
	}
	public function tambah()
	{
		$data = array(
			'nm_agenda' => $this->input->post('nm_agenda'),
			'tanggal' => $this->input->post('tanggal')
		);
		$res = $this->m_agenda->addData($data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil ditambahkan');
			redirect('agenda');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal ditambahkan');
			redirect('agenda');
		}
	}
	public function lihatdata($id)
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'agenda';
		$data['agenda'] = $this->m_agenda->showTable();
		$data['info'] = $this->m_agenda->viewData($id);
		$this->template->load('adminlte', 'ev_agenda', $data);	
	}
	public function ubahdata($id)
	{
		$data = array(
			'nm_agenda' => $this->input->post('nm_agenda'),
			'tanggal' => $this->input->post('tanggal')
		);
		$res = $this->m_agenda->updateData($id, $data);
		if ($res) {
			$this->session->set_flashdata('infoss', 'Data berhasil diubah');
			redirect('agenda');		
		}else {
			$this->session->set_flashdata('infoss', 'Data gagal diubah');
			redirect('agenda');		
		}		
	}
	public function hapusdata($id)
	{
		$res =$this->m_agenda->deleteData($id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dihapus');
			redirect('agenda');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
			redirect('agenda');

		}

	}

}

/* End of file agenda.php */
/* Location: ./application/controllers/agenda.php */