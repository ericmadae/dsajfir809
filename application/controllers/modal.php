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
		$akun=$this->m_modal->infoAkun($username);
		$data = array(
			'id' => $akun['id'],
			'username' => $akun['username'],
			'jabatan' => $akun['jabatan'],
		);

		$this->load->view('v_modal', $data);

	}
	public function getData()
	{
		$username = $this->session->userdata('username');
		$akun=$this->m_modal->infoAkun($username);
		$data = array(
			'id' => $akun['id'],
			'username' => $akun['username'],
			'jabatan' => $akun['jabatan'],
		);
		echo json_encode($data);
	}
	public function ubahakun()
	{
		$id = $this->input->post('id');
		$username=  $this->input->post('username');
		$data = array(
			'username' =>$username,
			'password' => md5($this->input->post('password'))
		);
		$res = $this->m_modal->updateUser($id, $data);
		$data1 = array('username' =>$username);
		$this->session->userdata('username');
		if ($res > 0) {
			$this->session->unset_userdata('username');
		$this->session->set_userdata($data1);
			$this->session->set_flashdata('infoss', 'Akun berhasil diperbaharui');
			
		}else {
			$this->session->set_flashdata('infoerr', 'Akun gagal diperbaharui');

		}
	}	

}

/* End of file modal.php */
/* Location: ./application/controllers/modal.php */