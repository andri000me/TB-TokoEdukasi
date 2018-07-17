<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListTransaksi extends CI_Controller {

	public function __construct()

	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (! $this->acl->is_public($current_controller))
			{
				if (! $this->acl->is_allowed($current_controller, $data['level']))
				{
					redirect('login','refresh');
				}
			}
			// $this->load->view('produk',$data);
		}
		else{
			redirect('logout/out','refresh');
		}
}
	public function index()
	{
		$this->load->model('list_transaksi');
		$data['transaksi'] = $this->list_transaksi->getTampil();
		$data['user'] = $this->list_transaksi->getUser();
		$data['userbytransaksi'] = $this->list_transaksi->getUserbyTransaksi();
		$data['namabyuser'] = $this->list_transaksi->getNamaByUser();
		$data['barangbyid'] = $this->list_transaksi->getBarangById();
		// $data['transaksipembayaran'] = $this->list_transaksi->transaksiByPembayaran();
		$this->load->view('transaksi',$data);
	}

	public function create($id)// sudah di isi di autoloard 
	{
		$this->load->model('list_transaksi');
		// $this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		$this->form_validation->set_rules('id_produk', 'id_produk', 'trim|required');
		//$this->form_validation->set_rules('produk', 'produk', 'required');
		$this->form_validation->set_rules('jumlah','jumlah','trim|required');
		$this->form_validation->set_rules('stok','stok','trim|required|callback_cekStok');
		// $this->form_validation->set_rules('total', 'total', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		
		$data['user'] = $this->list_transaksi->getUser();
		$data['produks'] = $this->list_transaksi->getProduk($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('input_data_transaksi', $data);
		}else{
			$this->list_transaksi->insertTransaksi($id);
			echo "<script> alert('Data Transaksi Berhasil Ditambahkan'); window.location.href='../../listTransaksi';
			</script>";
		}
	}

	public function payment($id)// sudah di isi di autoloard 
	{
		$this->load->model('list_transaksi');
		// $this->form_validation->set_rules('id_transaksi', 'id_transaksi', 'trim|required');
		$this->form_validation->set_rules('no_kartu','no_kartu','trim|required');
		$this->form_validation->set_rules('nama_pengguna','nama_pengguna','trim|required');
		$this->form_validation->set_rules('cvv', 'cvv', 'trim|required');
		
		$data['user'] = $this->list_transaksi->getUser();

		if($this->form_validation->run() == FALSE) {
			$this->load->view('input_data_pembayaran', $data);
		}else{
			$this->list_transaksi->insertPembayaran($id);
			echo "<script> alert('Data Pembayaran Berhasil Ditambahkan'); window.location.href='../../listTransaksi';
			</script>";
		}
	}
	public function paymentdesc($id)// sudah di isi di autoloard 
	{
		$this->load->model('list_transaksi');
		$this->form_validation->set_rules('id_user', 'id_user', 'trim');
		
		$data['pembayaran'] = $this->list_transaksi->getPembayaran($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('view_data_pembayaran', $data);
		}else{
			$this->list_transaksi->updatePembayaran($id);
			echo "<script> alert('Pembelian telah dikonfirmasi'); window.location.href='../../listTransaksi';
			</script>";
		}
	}

	public function update($id)
	{
	
		$this->load->model('list_transaksi');
		// $this->form_validation->set_rules('id_user', 'id_user', 'trim|required');
		// $this->form_validation->set_rules('id_produk', 'id_produk', 'trim|required');
		//$this->form_validation->set_rules('produk', 'produk', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
		
		$data['transaksi'] = $this->list_transaksi->getTransaksi($id);
		$data['produks'] = $this->list_transaksi->getProduk($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('edit_data_transaksi',$data);
		}else{
			$this->list_transaksi->updateByIdTransaksi($id);
			echo "<script> alert('Data Transaksi Berhasil Diupdate'); window.location.href='';
			</script>";
		}
	}
	
	public function delete($id)
	{
		$this->load->model('list_transaksi');
		$this->list_transaksi->delete($id);
		redirect('listTransaksi');
	}

	public function cekStok($stok)
	{
		$jumlah = $this->input->post('jumlah');
		if ($stok < $jumlah)
		{ 
			$this->form_validation->set_message('cekStok',"Jumlah Produk tidak tersedia");
			return false;
			
		}else{
			return true;
		}
	}
}

/* End of file ListTransaksi.php */
/* Location: ./application/controllers/ListTransaksi.php */