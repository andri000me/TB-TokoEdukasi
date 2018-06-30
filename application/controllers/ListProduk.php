<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListProduk extends CI_Controller {
	public function __construct()

	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller))
			{
				if (! $this->acl->is_allowed($current_controller, $data['level']))
				{
					redirect('login','refresh');
				}
			}
			// $this->load->view('produk',$data);
		}
		else{
			redirect('logout/out','refresh');
		}
}
	public function index()
	{
		$this->load->model('list_produk');
		$data["produk"] = $this->list_produk->getTampil();
		$this->load->view('produk',$data);
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_produk');
		$this->form_validation->set_rules('id_produk', 'id_produk', 'trim|required');
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		// $this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
		
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('input_data_produk');
		}else{
			$config['upload_path']			='./assets/uploads/';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('input_data_produk',$error);
			}
			else
			{
				$this->list_produk->insertProduk();
				$this->load->view('sukses_input_produk');
			}
			
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_produk');
		$this->form_validation->set_rules('id_produk', 'id_produk', 'trim|required');
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'trim|required');
		$this->form_validation->set_rules('harga', 'harga', 'trim|required');
		$this->form_validation->set_rules('stok', 'stok', 'trim|required');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
		// $this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
		

		$this->load->model('list_produk');
		$data['produk'] = $this->list_produk->getProduk($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('edit_data_produk',$data);
		}else{
			$this->list_produk->updateById($id);
			$this->load->view('sukses_edit_produk');
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_produk');
		$this->list_produk->delete($id);
		redirect('listProduk');
	}
}
