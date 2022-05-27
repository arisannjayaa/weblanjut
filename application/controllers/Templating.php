<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Templating extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templating/header');
		$this->load->view('templating/body');
		$this->load->view('templating/footer');
	}
}

/* End of file Templating.php */
/* Location: ./application/controllers/Templating.php */
