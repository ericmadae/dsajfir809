<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_dokumen');
		
	}
	public function index()
	{
		$data['submenu'] = 'dokumen';
		$data['dokumen'] = $this->m_dokumen->showTable();
		$this->template->load('adminlte', 'v_dokumen', $data);
	}
	public function upload()
	{
		$nm_file = $_POST['nm_file'];
		$config['upload_path'] = './uploads/document/';
		$config['allowed_types'] = 'pdf|xls|doc|docx';
		$config['max_size']  = 10000;
		if (isset($_POST['nm_file'])) {
			
			$config['file_name'] = $nm_file;
		}

		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('fdokumen')){
			$error = $this->upload->display_errors();
			$this->session->set_flashdata('infoerr', $error);
			redirect('dokumen');
		}
		else{
			$file = $this->upload->data();
			if (isset($_POST['nm_file'])) {
				$data = array(
					'nm_file' => $file['file_name'],
					'tanggal' => date('Y-m-d')
				);
			}else {
				$data = array(
					'nm_file' => $nm_file.$file['file_type'],
					'tanggal' => date('Y-m-d')
				);	
			}
			$res = $this->m_dokumen->addData($data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data berhsil ditambahkan');
				redirect('dokumen');
			}else {
				$this->session->set_flashdata('infoerr', 'Data gagal ditambahkan');
				redirect('dokumen');
			}
		}
	}
	public function hapusdata($id)
	{
		$dir = './uploads/document/';
		$data = $this->m_dokumen->viewData($id);
		$hapus = $dir.$data['nm_file'];
		if (file_exists($hapus)) {
			unlink($hapus);
		}
		$res = $this->m_dokumen->deleteData($id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dihapus');
			redirect('dokumen');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
			redirect('dokumen');
		}
	}

}

/* End of file dokumen.php */
/* Location: ./application/controllers/dokumen.php */