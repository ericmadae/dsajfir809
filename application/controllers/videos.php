<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_videos');
	}

	public function index()
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'videos';
		$data['videos'] = $this->m_videos->showData();
		$this->template->load('adminlte', 'v_videos', $data);		
	}
	public function tambah()
	{
		$config['upload_path']          = './uploads/video/';
		$config['allowed_types']        = 'mp4';
		$config['max_size']             = 102400;
		$config['overwrite']			= false;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('fvideo')){
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
				'video' => $file['file_name']
			);
			$res = $this->m_videos->addData($data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data berhasi ditambahkan');
				redirect('videos');
			}else {
				$this->session->set_flashdata('infoerr', 'Data gagal ditambahkan');
				redirect('videos');
			}
		}
	}
	public function lihatdata($id)
	{
		$data['menu'] = 'publikasi';
		$data['submenu'] = 'videos';
		$data['info'] = $this->m_videos->viewData($id);	
		$data['videos'] = $this->m_videos->showData();
		$this->template->load('adminlte', 'ev_videos', $data);		
		
	}
	public function ubahdata($id)
	{
		$nm_video = $this->input->post('nm_video');
		if (basename($_FILES['fvideo']['name']) != null) {
			$config['upload_path']          = './uploads/video/';
			$config['allowed_types']        = 'mp4';
			$config['max_size']             = 102400;
			$config['overwrite']			= false;
			
			$file = $config['upload_path'].$nm_video;

			if (file_exists($file)) {
				unlink($file);
			}

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('fvideo')){
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
					'video' => $file['file_name']
				);
				$res = $this->m_videos->updateData($id, $data);
				if ($res > 0) {
					$this->session->set_flashdata('infoss', 'Data berhasi diubah');
					redirect('videos');
				}else {
					$this->session->set_flashdata('infoerr', 'Data gagal diubah');
					redirect('videos');
				}
			}
		}else {
			$data = array(
				'judul' => $this->input->post('judul')
			);
			$res = $this->m_videos->updateData($id, $data);
			if ($res > 0) {
				$this->session->set_flashdata('infoss', 'Data berhasi diubah');
				redirect('videos');
			}else {
				$this->session->set_flashdata('infoerr', 'Data gagal diubah');
				redirect('videos');
			}
		}
	}
	public function hapusdata($id)
	{
		$data = $this->m_videos->viewData($id);
		$file =  './uploads/video/'.$data['video'];
		if (file_exists($file)) {
			unlink($file);
		}
		$res = $this->m_videos->deleteData($id);
		if ($res > 0) {
			$this->session->set_flashdata('infoss', 'Data berhasi dihapus');
			redirect('videos');
		}else {
			$this->session->set_flashdata('infoerr', 'Data gagal dihapus');
			redirect('videos');
		}
	}

}

/* End of file videos.php */
/* Location: ./application/controllers/videos.php */