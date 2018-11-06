<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "online") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->view('v_dashboard');		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */