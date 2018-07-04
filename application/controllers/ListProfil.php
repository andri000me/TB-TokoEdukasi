<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ListProfil extends CI_Controller {


	public function index()
	{	
		$this->load->model('list_profil');
		$data["login"] = $this->list_profil->getTampilProfil();
		$data["user"] = $this->list_profil->getUser();
		$this->load->view('profil',$data);
	}

	public function update($id)
	{
	
		$this->load->model('list_profil');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');

		$this->load->model('list_profil');
		$data['login'] = $this->list_profil->getprofil($id);
		$data['user'] = $this->list_profil->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('edit_data_profil',$data);
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
				$this->load->view('edit_data_profil',$error);
			}
			else
			{
				$this->list_profil->updateById($id);
				echo "<script> alert('Profil Anda Berhasil Diubah'); window.location.href='';
			</script>";
			}
		}
	}

	public function delete($id)
	{
		$this->load->model('list_profil');
		$this->list_user->delete($id);
		redirect('profil');
	}
}
