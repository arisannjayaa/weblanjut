<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Session extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('Session_model');
  }

  public function index()
  {
    $this->load->view('session/login');
  }

	public function login()
	{
		$this->Session_model->setSesi();
		redirect('session/user');
	}

	public function user()
	{
		$data['sesi'] = $this->session->userdata();
		$this->load->view('session/user', $data);
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect('session');
	}
}


/* End of file Session.php */
/* Location: ./application/controllers/Session.php */