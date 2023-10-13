<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('artikel_model');
	}

	public function index()
	{
		$logged_in_artikel = $this->session->userdata('logged_in_artikel');
		$nik = $this->session->userdata('niks');
		$roles = $this->session->userdata('roles');
		$witel = $this->session->userdata('witels');

		$filter = [];

		$data['judul'] = "Home";
		$data['menu_code'] = "home";
		$data['list_artikel'] = $this->artikel_model->list_artikel($filter)->result();

		$this->load->view('layout/start_homepage', $data);
		$this->load->view('layout/header', $data);

		$this->load->view('artikel/index');

		$this->load->view('layout/footer');
		$this->load->view('layout/end');

	}

	public function form_create()
	{
		$title['judul'] = "ADD Artikel";
		$title['menu_code'] = "artikel";

		$this->load->view('layout/start', $title);
		$this->load->view('layout/header', $title);

		$this->load->view('artikel/form_create');

		$this->load->view('layout/footer');
		// $this->load->view('artikel/js_form_create');
		$this->load->view('layout/end');
	}

	public function proses_create(){
		$new_artikel = array(
			'tgl_input' => date('Y-m-d H:i:s'),
			'is_delete' => 0,
		);

		$unrequired = array(
			'penulis' => 'penulis',
			'judul' => 'judul',
			'konten' => 'konten',
		);

		foreach ($unrequired as $key => $value) {
			if($this->input->post($value) != ""){
				$new_artikel[$key] = $this->input->post($value);
			}
		}

		$config['upload_path'] = './gambar';
		$config['allowed_types'] = '*';
		// $config['max_size'] = '10048';
		$config['remove_spaces'] = true;
		
		$this->load->library('upload', $config);


		if($_FILES['gambar']['name'] != '') {
			$ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
			$nama_file = "image".date("_YmdHisa").".".$ext;
			$config['file_name'] = $nama_file;

			$this->upload->initialize($config);
			
			if( ! $this->upload->do_upload('gambar'))
			{
				$pesan_error = 'Gambar cannot be uploaded. '.$this->upload->display_errors().'Please Try Again.';
			}
			else
			{
				$upload_data = $this->upload->data();
				if($upload_data){
					$new_artikel['gambar'] = $upload_data['file_name'];//$nama_file;
				}
			}
		}

    	$simpan = $this->artikel_model->save_artikel($new_artikel);
		if($simpan){
			redirect(site_url('artikel/index'));
		}else{
			//notif
			$data['pesan'] = 'Data tidak tersimpan. Silahkan dicoba kembali.';
			$this->load->view('custom_errors/error_proses', $data);
		}
    }

    public function form_edit($id_artikel)
	{
		$title['judul'] = "Edit Artikel";
		$title['menu_code'] = "artikel";

		$filter = [
			'id_artikel' => $id_artikel
		];
		$data['artikel'] = $this->artikel_model->list_artikel($filter)->row();

		$this->load->view('layout/start', $title);
		$this->load->view('layout/header', $title);

		$this->load->view('artikel/form_edit', $data);

		$this->load->view('layout/footer');
		// $this->load->view('artikel/js_form_create');
		$this->load->view('layout/end');
	}

	public function proses_edit(){
		$new_artikel = array(
			'tgl_input' => date('Y-m-d H:i:s'),
			'is_delete' => 0,
		);

		$unrequired = array(
			'penulis' => 'penulis',
			'judul' => 'judul',
			'konten' => 'konten',
		);

		foreach ($unrequired as $key => $value) {
			if($this->input->post($value) != ""){
				$new_artikel[$key] = $this->input->post($value);
			}
		}

		$config['upload_path'] = './gambar';
		$config['allowed_types'] = '*';
		// $config['max_size'] = '10048';
		$config['remove_spaces'] = true;
		
		$this->load->library('upload', $config);


		if($_FILES['gambar']['name'] != '') {
			$ext = pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION);
			$nama_file = "image".date("_YmdHisa").".".$ext;
			$config['file_name'] = $nama_file;

			$this->upload->initialize($config);
			
			if( ! $this->upload->do_upload('gambar'))
			{
				$pesan_error = 'Gambar cannot be uploaded. '.$this->upload->display_errors().'Please Try Again.';
			}
			else
			{
				$upload_data = $this->upload->data();
				if($upload_data){
					$new_artikel['gambar'] = $upload_data['file_name'];//$nama_file;
				}
			}
		}

		$filter = [
			'id_artikel' => $this->input->post('id_artikel')
		];

    	$simpan = $this->artikel_model->update_artikel($new_artikel, $filter);
		if($simpan){
			redirect(site_url('artikel/index'));
		}else{
			//notif
			$data['pesan'] = 'Data tidak tersimpan. Silahkan dicoba kembali.';
			$this->load->view('custom_errors/error_proses', $data);
		}
    }
}
