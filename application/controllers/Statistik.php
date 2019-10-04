<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}

	public function Jabatan()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/statistik-jabatan');
		$this->load->view('admin/template/foot');
	}

	public function Kompetensi()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/statistik-kompetensi');
		$this->load->view('admin/template/foot');
	}

}

/* End of file Statistik.php */
/* Location: ./application/controllers/Statistik.php */