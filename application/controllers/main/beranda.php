<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_stk');
	}
	public function index()
	{
		$data=$this->m_stk->stk_pengunjung();
		print_r($data);
		echo date('d-m-Y');
	}

}

/* End of file beranda.php */
/* Location: ./application/controllers/main/beranda.php */