<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Profil extends CI_Model {

	public function getProfil($id)
	{
		$this->db->where('id_user', $id);
		$query= $this->db->get('login');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array('username' => $this->input->post('username'), 
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'alamat' => $this->input->post('alamat'),
						'no_telp' => $this->input->post('no_telp'));

		$this->db->where('id_user', $id);
		$this->db->update('login', $object);
	}
	public function getUser(){
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * FROM login where username='$username'");
		return $query->result_array();
	}
	public function getTampilProfil()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];
		$query = $this->db->query("Select * from login where id_user=$id_user ");
		return $query->result_array();
	}
}
