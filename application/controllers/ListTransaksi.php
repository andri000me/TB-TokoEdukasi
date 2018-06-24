<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListTransaksi extends CI_Controller {

	public function index()
	{
		$this->load->model('list_transaksi');
		$data["transaksi"] = $this->list_transaksi->getTampil();
		$this->load->view('transaksi',$data);
	}

	public function create()// sudah di isi di autoloard 
	{
		$this->load->model('list_transaksi');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		$this->form_validation->set_rules('id_produk', 'id_produk', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('input_data_transaksi');
		}else{
			$this->list_transaksi->insertTransaksi();
			$this->load->view('sukses_input_transaksi');
		}
	}
	public function update($id)
	{
	
		$this->load->model('list_transaksi');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		$this->form_validation->set_rules('id_produk', 'id_produk', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		
		$data['transaksi'] = $this->list_transaksi->getTransaksi($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('edit_data_transaksi',$data);
		}else{
			$this->list_transaksi->updateByIdTransaksi($id);
			$this->load->view('sukses_edit_transaksi');
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_transaksi');
		$this->list_transaksi->delete($id);
		redirect('listTransaksi');
	}
}

/* End of file ListTransaksi.php */
/* Location: ./application/controllers/ListTransaksi.php */