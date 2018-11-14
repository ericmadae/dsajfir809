<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magenda extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita');
	}
	public function index()
	{
		$data['berita'] = $this->m_berita->showBerita();
		$this->template->load('depan', 'vd_agenda', $data);

	}
}

/* End of file magenda.php */
/* Location: ./application/controllers/magenda.php */