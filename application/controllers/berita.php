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
		$this->load->helper('tanggal');
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
		if (basename($_FILES['gambar']['name']) != null) {
			// syarat
			$config['upload_path']          = './assets/backend/dist/img/berita/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$config['overwrite']			= false;

			// melakukan upload
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('gambar')){
				$error =  $this->upload->display_errors();
				?>
					<script>
						alert('<?= $error ?>');
						window.history.back();
					</script>
				<?php
			}else{
				$gambar = $this->upload->data();
				$data = array(
				'judul_berita' => $this->input->post('judul_berita'),
				'waktu_publish' => date('Y-m-d'),
				'isi_berita' => $this->input->post('isi_berita'),
				'gambar' => $gambar['file_name']
					);
				$res = $this->m_berita->postBerita($data);
				if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data Berhasi Dimasukan');
				redirect('berita');					
					}
				}
			
		}else {
			$data = array(
				'judul_berita' => $this->input->post('judul_berita'),
				'waktu_publish' => date('Y-m-d'),
				'isi_berita' => $this->input->post('isi_berita'),
					);
			$res = $this->m_berita->postBerita($data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data Berhasi Dimasukan');
				redirect('berita');					
			}else {
				?>
				<script>
					alert('gagal menambahkan data');
					window.history.back();
				</script>
				<?php
			}
		}
		
	}
	public function ubahBerita($id)
	{
		$data['submenu'] = 'berita';
		$data['berita'] = $this->m_berita->showBerita();		
		$data['edit'] = $this->m_berita->viewNews($id);

		$this->template->load('adminlte', 'ev_berita', $data);
	}
	public function perbaruiBerita()
	{
		$id = $this->input->post('id');
		$nm_gambar = $this->input->post('nm_gambar');
		if (basename($_FILES['gambar']['name']) != null) {
			// syarat
			$config['upload_path']          = './assets/backend/dist/img/berita/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$config['overwrite']			= false;

			$hapus = $config['upload_path'].$nm_gambar;
			unlink($hapus);
			// melakukan upload
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('gambar')){
				$error =  $this->upload->display_errors();
				?>
					<script>
						alert('<?= $error ?>');
						window.history.back();
					</script>
				<?php
			}else{
				$gambar = $this->upload->data();
				$data = array(
				'judul_berita' => $this->input->post('judul_berita'),
				'waktu_publish' => date('Y-m-d'),
				'isi_berita' => $this->input->post('isi_berita'),
				'gambar' => $gambar['file_name']
					);
				$res = $this->m_berita->updateBerita($id, $data);
				if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data Berhasi ubah');
				redirect('berita');					
					}
				}
			
		}else {
			$data = array(
				'judul_berita' => $this->input->post('judul_berita'),
				'waktu_publish' => date('Y-m-d'),
				'isi_berita' => $this->input->post('isi_berita'),
					);
			$res = $this->m_berita->updateBerita($id, $data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data Berhasi ubah');
				redirect('berita');					
			}else {
				?>
				<script>
					alert('gagal ubah berita');
					window.history.back();
				</script>
				<?php
			}
		}
		
	}
	public function hapusBerita($id)
	{
		$dir = './assets/backend/dist/img/berita/';
		$data = $this->m_berita->viewNews($id);
		$hapus = $dir.$data['gambar'];
		if (file_exists($hapus)) {
			unlink($hapus);
		}
		$res = $this->m_berita->deleteBerita($id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dihapus');
			redirect('berita');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
			redirect('berita');
		}
	}

}

/* End of file berita.php */
/* Location: ./application/controllers/berita.php */