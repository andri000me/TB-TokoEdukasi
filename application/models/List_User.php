<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_User extends CI_Model {
	public function insertUser()
	{
		

		$object = array('username' => $this->input->post('username'), 
						'password' => md5($this->input->post('password')),
						'level' => 'user',
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'email' => $this->input->post('email'),
						'alamat' => $this->input->post('alamat'),
						'no_telp' => $this->input->post('no_telp'));
		
		$this->db->insert('login', $object);

		
	}
	public function getUser($id)
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
	public function getTampil()
	{
		$query = $this->db->query("Select * from login");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_user', $id);
		$this->db->delete('login');
	}
}
