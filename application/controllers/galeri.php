<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_galeri');
	}

	public function index()
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'galeri';
		$data['galeri'] = $this->m_galeri->showData();
		$this->template->load('adminlte', 'v_galeri', $data);		
	}
	public function tambah()
	{
		$config['upload_path']          = './uploads/galeri/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 5000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['overwrite']			= false;

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
			$file = $this->upload->data();
			$data = array(
				'judul' => $this->input->post('judul'),
				'tanggal' => date('Y-m-d'),
				'gambar' => $file['file_name']
			);
			$res = $this->m_galeri->addData($data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data berhasi ditambahkan');
				redirect('galeri');
			}else {
				$this->session->set_flashdata('infoerr', 'Data gagal ditambahkan');
				redirect('galeri');
			}
		}
	}
	public function lihatdata($id)
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'galeri';
		$data['info'] = $this->m_galeri->viewData($id);	
		$data['galeri'] = $this->m_galeri->showData();
		$this->template->load('adminlte', 'ev_galeri', $data);		
		
	}
	public function ubahdata($id)
	{
		$nm_gambar = $this->input->post('nm_gambar');
		if (basename($_FILES['gambar']['name']) != null) {
			$config['upload_path']          = './uploads/galeri/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			
			$file = $config['upload_path'].$nm_gambar;

				if (file_exists($file)) {
					unlink($file);
				}

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
				$file = $this->upload->data();
				$data = array(
					'judul' => $this->input->post('judul'),
					'gambar' => $file['file_name']
				);
				$res = $this->m_galeri->updateData($id, $data);
				if ($res > 0) {
					$this->session->set_flashdata('infoss', 'Data berhasi diubah');
					redirect('galeri');
				}else {
					$this->session->set_flashdata('infoerr', 'Data gagal diubah');
					redirect('galeri');
				}
			}
		}else {
			$data = array(
				'judul' => $this->input->post('judul')
			);
			$res = $this->m_galeri->updateData($id, $data);
				if ($res > 0) {
					$this->session->set_flashdata('infoss', 'Data berhasi diubah');
					redirect('galeri');
				}else {
					$this->session->set_flashdata('infoerr', 'Data gagal diubah');
					redirect('galeri');
				}
		}
	}
	public function hapusdata($id)
	{
		$data = $this->m_galeri->viewData($id);
		$file =  './upload/galeri/'.$data['gambar'];
		if (file_exists($file)) {
			unlink($file);
		}
		$res = $this->m_galeri->deleteData($id);
				if ($res > 0) {
					$this->session->set_flashdata('infoss', 'Data berhasi dihapus');
					redirect('galeri');
				}else {
					$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
					redirect('galeri');
				}
	}

}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */