
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
					redirect('logout/out','refresh');
				}
			}
			$this->load->model('Dashboardmod');
		}
		else{
			redirect('logout/out','refresh');
		}
	}

	public function index()
	{
		$data['jumlahuser'] = $this->Dashboardmod->getDataUser();
		$data['jumlahproduk'] = $this->Dashboardmod->getDataProduk();
		$data['jumlahtransaksi'] = $this->Dashboardmod->getDataTransaksi();
		$data['jumlahtransaksiuser'] = $this->Dashboardmod->getDataTransaksiByUser();
		$data['user'] = $this->Dashboardmod->getUser();
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