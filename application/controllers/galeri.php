<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'galeri';
		$this->template->load('adminlte', 'v_galeri', $data);		
	}

}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */