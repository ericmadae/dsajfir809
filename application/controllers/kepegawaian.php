<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kepegawaian');
	}
	public function index()
	{
		$data['menu'] = 'pemerintahan';
		$data['submenu'] = 'kepegawaian';
		$data['pegawai'] = $this->m_kepegawaian->showTables();
		$this->template->load('adminlte', 'v_kepegawaian', $data);
	}
	public function tambah()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip'),
			'nik' => $this->input->post('nik'),
			'jabatan' => $this->input->post('jabatan')
		);

		if (basename($_FILES['foto']['name']) != null) {
			$config['upload_path']   = './assets/image/pemerintahan/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('foto')){
				$error =  $this->upload->display_errors();
				?>
				<script>
					alert('<?= $error ?>');
					window.history.back();
				</script>
				<?php
			}else{
				$gambar = $this->upload->data();
				$data['foto'] = $gambar['file_name'];
				$res = $this->m_kepegawaian->addData($data);
			}
		}else {

			$res = $this->m_kepegawaian->addData($data);
		}
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil ditambahkan');
			redirect('kepegawaian');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal ditambahkan');
			redirect('kepegawaian');
		}
	}
	public function lihatdata($id)
	{
		
		$data['menu'] = 'pemerintahan';
		$data['submenu'] = 'kepegawaian';
		$data['pegawai'] = $this->m_kepegawaian->showTables();
		$data['info'] = $this->m_kepegawaian->viewData($id);
		$this->template->load('adminlte', 'ev_kepegawaian', $data);
	}
	public function ubahdata($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip'),
			'nik' => $this->input->post('nik'),
			'jabatan' => $this->input->post('jabatan')
		);
		$nm_foto = $this->input->post('nm_foto');

		if (basename($_FILES['foto']['name']) != null) {
			$config['upload_path']   = './assets/image/pemerintahan/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$config['file_name']			= $nm_foto;
			$config['overwrite']			= true;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('foto')){
				$error =  $this->upload->display_errors();
				?>
				<script>
					alert('<?= $error ?>');
					window.history.back();
				</script>
				<?php
			}			
			$foto = $this->upload->data();
			$data['foto'] = $foto['file_name'];
			$res = $this->m_kepegawaian->updateData($id, $data);
		}else {
			
			$res = $this->m_kepegawaian->updateData($id, $data);
		}
			

			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data berhasil diubah');
				redirect('kepegawaian');
			}else {
				$this->session->set_flashdata('infoerr', 'Data gagal diubah');
				redirect('kepegawaian');
			}
	}
	public function hapusdata($id)
	{
		$info = $this->m_kepegawaian->viewData($id);
		$file = './assets/image/pemerintahan/'.$info['foto'];

		if (file_exists($file)) {
			unlink($file);
		}
		$res = $this->m_kepegawaian->deleteData($id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasil dihapus');
			redirect('kepegawaian');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
			redirect('kepegawaian');
		}
	}

}

/* End of file kepegawaian.php */
/* Location: ./application/controllers/kepegawaian.php */