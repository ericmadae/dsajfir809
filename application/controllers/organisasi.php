<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_organisasi');
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
		$data['menu'] = 'pemerintahan';
		$data['submenu'] = 'organisasi';
		$data['organisasi'] = $this->m_organisasi->showTable();
		$this->template->load('adminlte', 'v_organisasi', $data);
	}
	public function ubahdata($id)
	{
		$data['menu'] = 'pemerintahan';
		$data['submenu'] = 'organisasi';
		$data['organisasi'] = $this->m_organisasi->showTable();
		$data['info'] = $this->m_organisasi->viewData($id);
		$this->template->load('adminlte', 'v_organisasi', $data);
	}
	public function ubahinfo($id)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip'),
			'nik' => $this->input->post('nik'),
		);
		$nm_foto = $this->input->post('nm_foto');

		// syarat
		$config['upload_path']          = './assets/image/pemerintahan/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name']			= $nm_foto;
		$config['overwrite']			= true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')) {
			$error =  $this->upload->display_errors();
			?>
			<script>
				alert('<?= $error ?>');
				window.history.back();
			</script>
			<?php				
		}else{
			$res = $this->m_organisasi->updateData($id, $data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data Berhasi diubah');
				redirect('organisasi');					
			}
		}
		$res = $this->m_organisasi->updateData($id, $data);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data Berhasi diubah');
			redirect('organisasi');
		}else {
			$this->session->set_flashdata('infoerr', 'Data Gagal diubah');	
		}					
	}
	
}

/* End of file organisasi.php */
/* Location: ./application/controllers/organisasi.php */