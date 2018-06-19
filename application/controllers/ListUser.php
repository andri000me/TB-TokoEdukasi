<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class ListUser extends CI_Controller {
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
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('input_data_user');
		}else{
			$this->list_user->insertUser();
			$this->load->view('sukses_input_user');
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_user');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		

		$this->load->model('list_user');
		$data['login'] = $this->list_user->getUser($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('edit_data_user',$data);
		}else{
			$this->list_user->updateById($id);
			$this->load->view('sukses_edit_user');
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_user');
		$this->list_user->delete($id);
		redirect('listUser');
	}
}
