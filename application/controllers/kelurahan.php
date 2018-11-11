<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_kelurahan');
	}
	public function index()
	{
		$data['menu'] = "pemerintahan";
		$data['submenu'] = "desa";
		$data['desa'] = $this->m_kelurahan->showTable();
		$this->template->load('adminlte', 'v_kelurahan', $data);	
	}

}

/* End of file kelurahan.php */
/* Location: ./application/controllers/kelurahan.php */