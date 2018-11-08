<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "online") {
			redirect('login');
		}
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_berita');
	}
	public function index()
	{
		$data['submenu'] = 'berita';
		$data['berita'] = $this->m_berita->showBerita();		
		$this->template->load('adminlte', 'v_berita', $data);
	}
	public function beritaBaru()
	{
	
		$config['upload_path']          = './assets/backend/dist/img/berita/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		// $file = $config['upload_path'].basename($_FILES["gambar"]["name"]);
		if (basename($_FILES['gambar']['name']) != null) {
			echo '<pre>';
			print_r($_FILES['gambar']);
		}else {
			echo '2';
		}
		// $config['overwrite']			= true;



		// $this->load->library('upload', $config);
		// if ( ! $this->upload->do_upload('gambar')){
			// $error =  $this->upload->display_errors();
			// $this->session->set_flashdata('ubaherr', $error);
			// redirect('berita');
		// }else{
			// $gambar = $this->upload->data();
			// $data = array(
			// 'judul_berita' => $this->input->post('judul_berita'),
			// 'waktu_publish' => date('Y-m-d'),
		// 	'isi_berita' => $this->input->post('isi_berita'),
		// 	'gambar' => $gambar['file_name']
		// );
			// $res = $this->m_berita->postBerita($data);
			// echo $res;
			// $this->session->set_flashdata('ubahss', 'foto berhasi di ubah');
			// redirect('berita');
			// }
	}

}

/* End of file berita.php */
/* Location: ./application/controllers/berita.php */