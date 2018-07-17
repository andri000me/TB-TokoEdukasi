<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_Transaksi extends CI_Model {

	
	public function insertTransaksi($id)
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];
		$id = $this->input->post('id_produk');
		$jumlah = $this->input->post('jumlah');

		$this->db->where('id_produk',$id);
		$query1 = $this->db->get('produk');
		$query_result = $query1->result_array();

		foreach ($query_result as $value) {
		 	$stok_lama = $value['stok'];
		 	$harga_awal = $value['harga'];
		}
		
		$harga_baru = $harga_awal * $jumlah;
		$stok_baru = $stok_lama - $jumlah;

		$object = array(
			'id_user' => $id_user, 
			'id_produk' => $id,
			'jumlah' => $jumlah,
			'total_harga' => $harga_baru,
			'tanggal' => $this->input->post('tanggal')
		);
					
		$this->db->insert('transaksi', $object);

		$object2 = array(
			'stok' => $stok_baru
		);

		$this->db->where('id_produk', $id);
		$this->db->update('produk', $object2);

		// $query = $this->db->query("SELECT * from transaksi as t inner join produk as p on t.id_produk = p.id_produk where t.id_user='$id_user'");
		// return $query->result_array();

		// $query1 = $this->db->get('produk');
		// $query_result = $query1->result();
		// return $query_result;

		// foreach ($query_result as $value) {
		// 	$stok_lama = $value['stok'];
		// }

		// $stok_baru = 6 - $jumlah;

		// $query2 = $this->db->query("UPDATE produk set stok=$stok_baru where id_produk = '$id_produk'");
		// return $query2->result_array();
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
	public function getProduk($id)
	{
		$this->db->where('id_produk', $id);
		$query= $this->db->get('produk');
		return $query->result();
	}

	public function getPembayaran($id)
	{
		$this->db->where('fkTransaksi', $id);
		$query= $this->db->get('pembayaran');
		return $query->result();
	}

	public function getNamaByUser()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];
		$query = $this->db->query("SELECT distinct username from login as l inner join transaksi as t on l.id_user = t.id_user where l.id_user='$id_user'");
		return $query->result_array();
	}
	public function getBarangById()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];

		$query = $this->db->query("SELECT DISTINCT * from transaksi as t inner join produk as p on t.id_produk = p.id_produk");
		return $query->result_array();
	}
	public function getUserbyTransaksi()
	{
		$session_data = $this->session->userdata('logged_in');
		$username = $session_data['username'];

		$query = $this->db->query("SELECT l.username,p.nama_produk,t.jumlah,t.total_harga,t.tanggal,pe.fkTransaksi,t.id_transaksi,pe.status from produk as p inner join transaksi as t on p.id_produk = t.id_produk inner join login as l on t.id_user = l.id_user left join pembayaran as pe on t.id_transaksi = pe.fkTransaksi where l.username='$username'");
		return $query->result_array();
	}
	public function getTampil()
	{
		$query = $this->db->query("SELECT l.username,p.nama_produk,t.jumlah,t.total_harga,t.tanggal,pe.fkTransaksi,t.id_transaksi,pe.status from produk as p inner join transaksi as t on p.id_produk = t.id_produk inner join login as l on t.id_user = l.id_user left join pembayaran as pe on t.id_transaksi = pe.fkTransaksi");
		return $query->result_array();
	}
	public function updateByIdTransaksi($id)
	{
		
		$object = array(
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
	
	public function insertPembayaran($id)
	{

		$object = array(
			'fkTransaksi' => $id,
			'no_kartu' => $this->input->post('no_kartu'),
			'nama_pengguna' => $this->input->post('nama_pengguna'),
			'cvv' => $this->input->post('cvv'),
			'status' => 'menunggu',
		);
					
		$this->db->insert('pembayaran', $object);
	}
	public function updatePembayaran($id)
	{
		$object = array(
			'status' => 'dibayar'
		);
		$this->db->where('fkTransaksi', $id);
		$this->db->update('pembayaran', $object);
	}
	// public function transaksiByPembayaran()
	// {
	// 	$query = $this->db->query("SELECT * from transaksi as t left join pembayaran as p on t.id_transaksi = p.id_transaksi;");
	// 	return $query->result_array();
	// }
	public function stok()
	{
		$session_data = $this->session->userdata('logged_in');
		$id_user = $session_data['id_user'];
		$jumlah = $this->input->post('jumlah'); 

		$query = $this->db->query("SELECT * from transaksi as t inner join produk as p on t.id_produk = p.id_produk where t.id_user='$id_user'");
		return $query->result_array();

		$query1 = $this->db->get('produk');
		$query_result = $query1->result();
		return $query_result;

		foreach ($query_result as $value) {
			$id_produk = $value['id_produk'];
			$stok_lama = $value['stok'];
		}

		$stok_baru = $stok_lama - $jumlah;

		$query2 = $this->db->query("UPDATE produk set stok='$stok_baru' where id_produk = $id_produk");
		return $query2->result_array();
		
		foreach ($stok as $key) {
			$stok_baru= $key['stok']-$key['jumlah'];
		}

		$object = array(
			'stok' => $stok_baru
		);
		$this->db->where('id_produk', $id_produk);
		$this->db->update('produk', $object);
	}
}

/* End of file List_Transaksi.php */
/* Location: ./application/models/List_Transaksi.php */