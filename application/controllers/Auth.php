<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function user()
	{
		$this->Auth_model->add();
		$data['session'] = $this->session->userdata();
		$this->load->view('auth/user', $data);
	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
