<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promosi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function jabatan()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/promosi-jabatan');
		$this->load->view('admin/template/foot');
	}

	public function kandidat()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/promosi-kandidat');
		$this->load->view('admin/template/foot');
	}

	public function pegawai()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/promosi-pegawai');
		$this->load->view('admin/template/foot');
	}

}

/* End of file Promosi.php */
/* Location: ./application/controllers/Promosi.php */