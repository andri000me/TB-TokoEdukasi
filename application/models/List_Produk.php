<?php
// define('BASEPATH') OR exit ('No direct script access allowed');
class List_Produk extends CI_Model {
	public function insertProduk()
	{

		$object = array('id_produk' => $this->input->post('id_produk'), 
						'nama_produk' => $this->input->post('nama_produk'),
						'harga' => $this->input->post('harga'),
						'stok' => $this->input->post('stok'),
						'deskripsi' => $this->input->post('deskripsi'),
						'gambar' => $this->upload->data('file_name'));
		
		$this->db->insert('produk', $object);
	}
	public function getProduk($id)
	{
		$this->db->where('id_produk', $id);
		$query= $this->db->get('produk');
		return $query->result();
	}
	public function updateById($id)
	{	
		$object = array( 
						'nama_produk' => $this->input->post('nama_produk'),
						'harga' => $this->input->post('harga'),
						'stok' => $this->input->post('stok'),
						'deskripsi' => $this->input->post('deskripsi'),
						'gambar' => $this->input->post('gambar')
					);
		$this->db->where('id_produk', $id);
		$this->db->update('produk', $object);
	}
	public function getTampil()
	{
		$query = $this->db->query("Select * from produk");
		return $query->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
}
