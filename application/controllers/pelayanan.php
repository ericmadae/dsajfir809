<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pelayanan');
	}
	public function index()
	{
		$data['submenu'] ='pelayanan';
		$data['pelayanan'] = $this->m_pelayanan->showTable();
		$this->template->load('adminlte', 'v_pelayanan', $data);
	}

}

/* End of file pelayanan.php */
/* Location: ./application/controllers/pelayanan.php */