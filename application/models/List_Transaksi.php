<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Transaksi extends CI_Model {

	public function getTampil()
	{
		$query = $this->db->query("Select * from transaksi");
		return $query->result_array();
	}
	public function insertTransaksi()
	{

		$object = array(
			'id_user' => $this->input->post('id_user'), 
			'id_produk' => $this->input->post('id_produk'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal')
		);
					
		$this->db->insert('transaksi', $object);
	}
	public function getTransaksi($id)
	{
		$this->db->where('id_transaksi', $id);
		$query= $this->db->get('Transaksi');
		return $query->result();
	}
	public function getUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];
		$query = $this->db->query("SELECT * from login where username='$username'");
		// var_dump($query);die();
		return $query->result_array();
	}
	public function updateByIdTransaksi($id)
	{
		
		$object = array(
			'id_user' => $this->input->post('id_user'), 
			'id_produk' => $this->input->post('id_produk'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal')
		);

		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $object);
	}
	public function delete($id)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->delete('transaksi');
	}
}

/* End of file List_Transaksi.php */
/* Location: ./application/models/List_Transaksi.php */