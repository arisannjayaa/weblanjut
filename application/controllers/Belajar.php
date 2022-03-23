<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

	public function __construct()
    {
    parent::__construct();
    }
    
    public function index()
    {
    $this->load->model('M_Model');
    $str = $this->M_Model->getString();
    $data['data'] = $str;
    $this->load->view('belajar',$data);
    }
}