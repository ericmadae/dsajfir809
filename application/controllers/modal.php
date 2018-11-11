<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_modal');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$data['akun']=$this->m_modal->infoAkun($username);
		$this->template->load('adminlte', 'v_modal', $data);			
	}
	public function ubahakun()
	{
		$id = $this->input->post('id');
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		$res = $this->m_dashboard->updateUser($id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Akun berhasil diperbaharui');
			redirect('dashboard');			
		}else {
			$this->session->set_flashdata('infoerr', 'Akun gagal diperbaharui');
			redirect('dashboard');
		}
	}	

}

/* End of file modal.php */
/* Location: ./application/controllers/modal.php */