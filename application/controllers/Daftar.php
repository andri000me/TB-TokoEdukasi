<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Daftar extends CI_Controller {

	public function home()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('Home',$data);
		}
		else{
			redirect('login','refresh');
		}	
	}
	public function index()
	{
		$this->load->view('Daftar');
	}
	public function cekDaftar()
	{
		$this->load->model('create');
		$this->load->Library('form_validation');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('konfirmasi', 'Konfirmasi', 'trim|required|callback_cekPassword');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('daftar');
		}else{
			$this->create->tambah();
			redirect('admin','refresh');
		}
	}
	public function cekPassword($konfirmasi)
	{
		$password = $this->input->post('password');
		if ($konfirmasi != $password)
		{
			$this->form_validation->set_message('cekPassword',"Password Tidak Sama");
			return false;
			
		}else{
			return true;
		}
	}	
}