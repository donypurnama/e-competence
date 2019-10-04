<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Masterdata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function jabatan()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/md-jabatan');
		$this->load->view('admin/template/foot');
	}

	public function kompetensi()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/md-kompetensi');
		$this->load->view('admin/template/foot');
	}

	public function pegawai()
	{
		$this->load->view('admin/template/head');
		$this->load->view('admin/md-pegawai');
		$this->load->view('admin/template/foot');
	}

}

/* End of file Masterdata.php */
/* Location: ./application/controllers/Masterdata.php */