<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListUser extends CI_Controller {
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
		$this->load->model('list_user');
		$data["login"] = $this->list_user->getTampil();
		$this->load->view('tampil_user',$data);
	}
	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_user');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('input_data_user');
		}
		else{
			$this->list_user->insertUser();
			echo "<script> alert('Data User Berhasil Ditambahkan'); window.location.href='';
			</script>";
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_user');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');

		$this->load->model('list_user');
		$data['login'] = $this->list_user->getUser($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('edit_data_user',$data);
		}else{
			$this->list_user->updateById($id);
			echo "<script> alert('Data User Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_user');
		$this->list_user->delete($id);
		redirect('listUser','refresh');
	}
}
