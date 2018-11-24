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
		$data['submenu'] = "dashboard";
		$data['pengunjung'] = $this->m_dashboard->pengunjung();
		$data['total'] = $this->m_dashboard->total();
		$data['penilaian']= $this->m_dashboard->penilaian();
		
		$data['belumdibaca']= $this->m_dashboard->belumdibaca();
		$data['online']= $this->m_dashboard->online();
		$this->template->load('adminlte', 'v_dashboard', $data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */