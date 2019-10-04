<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function buat()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/mutasi-buat');
		$this->load->view('admin/template/foot');
	}

	public function jabatan()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/mutasi-jabatan');
		$this->load->view('admin/template/foot');
	}

	public function rancang()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/mutasi-rancang');
		$this->load->view('admin/template/foot');
	}

}

/* End of file Mutasi.php */
/* Location: ./application/controllers/Mutasi.php */