<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		if ($this->session->userdata('status') == "online") {
			redirect('dashboard');
		}
		$this->load->view('v_login');
	}
	public function aksi_login()
	{
		$username = $this->input->post('username');
		$jabatan  = $this->input->post('jabatan');
		$password = md5($this->input->post('password'));
		$where = array(
			'username' => $username,
			'jabatan' => $jabatan,
			'password' => $password
		);
		$cek = $this->m_login->cek($where)->num_rows();
		if ($cek > 0) {
			$data = array(
				'username' => $username,
				'jabatan' => $jabatan,
				'status' => "online"
			);
			$this->session->set_userdata($data);
			redirect('dashboard');
		}else {
			$this->session->set_flashdata('gagal', 'username dan password anda salah!!');
			redirect('login');
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */