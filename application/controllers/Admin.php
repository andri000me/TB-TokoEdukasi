
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function data()
	{
		$this->load->view('tabel');
	}
	public function error()
	{
		$this->load->view('404');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
?>