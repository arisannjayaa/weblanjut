<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Mahasiswa_model");
  }

  public function index()
  {
    $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswa();
    $this->load->view('mahasiswa/detail', $data);
  }

  public function tambah()
  {
    $this->load->view('mahasiswa/tambah');
  }

  public function add() {
    $this->Mahasiswa_model->insertMahasiswa();
    redirect('mahasiswa');
  }

  public function edit()
  {
    $this->Mahasiswa_model->editMahasiswa();
    redirect('mahasiswa');
  }
  
  public function ubah($id)
  {
    $data['mahasiswa'] = $this->Mahasiswa_model->getDetailMahasiswa($id);
    $this->load->view('mahasiswa/update', $data);
  }

}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */