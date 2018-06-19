<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function tambah()

	{
		
		$object = array(
						'email' => $this->input->post('email'),
						'alamat' => $this->input->post('alamat'),
						'no_telp' => $this->input->post('no_telp'),
						'nama_lengkap' => $this->input->post('nama_lengkap'),
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password'))
					);
		$this->db->insert('login', $object);
	}
}
