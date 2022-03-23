<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
    parent::__construct();
    }
    
    public function index()
    {
    $this->load->model('ModelMahasiswa');
    $data = $this->ModelMahasiswa->getData();
    $this->load->view('mahasiswa',$data);
    }
}