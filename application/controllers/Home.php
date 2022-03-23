<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
    parent::__construct();
    $this->load->model('M_home');
    }

	public function index()
	{
		$this->load->view('home');
	}
	public function home_data()
	{
		$data['matkul'] = 'Web Lanjut';
		$this->load->view('home_data', $data);
	}

	public function getModel()
	{
		$this->load->model('M_home');
		$program_studi = $this->M_home->getData();
		$data['prodi'] = $program_studi;
		$this->load->view('home_getdata', $data);
	}

	public function getModelArray()
	{
		$this->load->model('M_home');
		$univ = $this->M_home->getArray();
		$this->load->view('home_array', $univ);
	}

	public function error() {
		echo 'Halaman tidak ditemukan';
	}

	public function url() {
		echo base_url();
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */