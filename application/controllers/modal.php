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
		print_r($data);
		//$res = $this->m_dashboard->updateUser($id, $data);
		$data1 = array(
			'username' =>$username);
		echo $this->session->userdata('username');
		$this->session->unset_userdata('username');
		$this->session->set_userdata($data1);
		echo $this->session->userdata('username');

		// if ($res > 0) {
		// 	$this->session->unset_userdata('username');			
		// 	$this->session->set_userdata($data['username']);
		// 	$this->session->set_flashdata('infoss', 'Akun berhasil diperbaharui');
		// 	redirect($this->uri->uri_string());			
		// }else {
		// 	$this->session->set_flashdata('infoerr', 'Akun gagal diperbaharui');
		// 	redirect($this->uri->uri_string());
		// }
	}	

}

/* End of file modal.php */
/* Location: ./application/controllers/modal.php */