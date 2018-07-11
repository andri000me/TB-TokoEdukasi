<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmod extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function getDataUser(){
	    $query = $this->db->query("SELECT COUNT(id_user) FROM login");
	    return $query->row();
	}
	public function getDataProduk(){
	    $query = $this->db->query("SELECT COUNT(id_produk) FROM produk");
	    return $query->row();
	}
	public function getDataTransaksi(){
	    $query = $this->db->query("SELECT COUNT(id_transaksi) FROM transaksi");
	    return $query->row();
	}
	public function getDataTransaksiByUser(){
	    $session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];
	    $query = $this->db->query("SELECT COUNT(id_transaksi) FROM transaksi where id_user='$id_user'");
	    return $query->row();
	}
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */