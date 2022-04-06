<?php
defined('BASEPATH') or exit('No direct script access allowed');


class LatihanDb extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('LatihanDb_model');
  }

  public function index()
  {
    // 
  }

  public function input()
  {
    $data = $this->LatihanDb_model->inputMhs();
    if ($data) {
      echo "Sukses";
    }else {
      echo "Gagal";
    }
  }

  public function readAll()
  {
    $data = $this->LatihanDb_model->getAllMhs();
    echo "<pre>";
    print_r($data->result_array());
    echo "</pre>";
  }

  public function Jurusan()
  {
    $data = $this->LatihanDb_model->getJurusan(1);
    echo "<pre>";
    print_r($data->result_array());
    echo "</pre>";
  }

  public function read()
  {
    $data = $this->LatihanDb_model->getMhs(1);
    echo "<pre>";
    print_r($data->result_array());
    echo "</pre>";
  }

  public function join()
  {
    $data = $this->LatihanDb_model->getJoin();
    echo "<pre>";
    print_r($data->result_array());
    echo "</pre>";
  }

  public function update()
  {
    $data = $this->LatihanDb_model->updateMhs(1);
    if ($data) {
      echo "Sukses";
    }else {
      echo "Gagal";
    }
  }

  public function delete()
  {
    $data = $this->LatihanDb_model->deleteMhs(1);
    if ($data) {
      echo "Sukses";
    }else {
      echo "Gagal";
    }
  }
}


/* End of file LatihanDb.php */
/* Location: ./application/controllers/LatihanDb.php */