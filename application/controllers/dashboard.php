<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "online") {
			redirect('login');
		}
		$this->load->model('m_dashboard');
	}

	public function index()
	{
	$username = $this->session->userdata('username');
		$data['submenu'] = "dashboard";
		$data['akun'] = $this->m_dashboard->getId($username);
		$this->session->set_userdata($data['akun']);	
		$this->template->load('adminlte', 'v_dashboard', $data);
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

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */