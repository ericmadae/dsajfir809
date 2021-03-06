<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "online") {
			redirect('login');
		}
		$this->load->model('m_visimisi');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
	$username = $this->session->userdata('username');
		$data['menu'] ="profil";
		$data['submenu'] = "visimisi";
		$data['profil'] = $this->m_visimisi->getProfil();
		$this->template->load('adminlte', 'v_visimisi', $data);		
	}
	public function aksi_upload(){
		$config['upload_path']          = './assets/backend/dist/img/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name']           = 'visimisi.jpg';
		$config['overwrite']           = true;


		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('imgprof')){
			$error =  $this->upload->display_errors();
			$this->session->set_flashdata('infoerr', $error);
			redirect('visimisi');
		}else{
			$data = $this->upload->data();
			$this->session->set_flashdata('infoss', 'foto berhasi di ubah');
			redirect('visimisi');
			}
	}
	public function ubahProf()
	{
		$id = 1;
		$data = array(
		'title' =>	$this->input->post('title'),
		'isi' =>	$this->input->post('isi')
		);

		$res = $this->m_visimisi->updateProf($id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Profil Berhasil diperbaharui');
			redirect('dashboard');			
		}else {
			$this->session->set_flashdata('infoerr', 'Profil Gagal diperbaharui');
			redirect('dashboard');
		}
	}
}

/* End of file sejarah.php */
/* Location: ./application/controllers/sejarah.php */