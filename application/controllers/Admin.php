
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->model('Dashboardmod');
		$data['jumlahuser'] = $this->Dashboardmod->getDataUser();
		$data['jumlahproduk'] = $this->Dashboardmod->getDataProduk();
		$data['jumlahtransaksi'] = $this->Dashboardmod->getDataTransaksi();
		$this->load->view('index', $data);
	}
	public function user()
	{
		$this->load->view('profil');
	}
	public function produk()
	{
		$this->load->view('produk');
	}
	public function transaksi()
	{
		$this->load->view('transaksi');
	}
	public function error()
	{
		$this->load->view('404');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
?>