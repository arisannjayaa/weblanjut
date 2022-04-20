<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Karyawan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('Karyawan_model');
  }

  public function index()
  {
    $this->load->view('karyawan/tambah');
  }

	public function hasil()
	{
		$data['karyawan'] = $this->Karyawan_model->insertKaryawan();
		$this->load->view('karyawan/detail', $data);
	}

}


/* End of file Karyawan.php */
/* Location: ./application/controllers/Karyawan.php */
