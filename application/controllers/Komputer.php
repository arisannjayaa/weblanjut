<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komputer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Komputer_model');
	}

	public function index()
	{
		$session = $this->session->userdata();
		if ($session['user'] == 'admin' && $session['pass'] == 'admin') {
			$data['barang'] = $this->Komputer_model->getBarang();
			$this->load->view('komputer/admin/detail', $data);
		} elseif ($session['user'] == 'pembeli' && $session['pass'] == 'pembeli') {
			$data['barang'] = $this->Komputer_model->getBarang();
			$this->load->view('komputer/user/detail', $data);
		} else {
			redirect('komputer/login');
		}
	}

	public function setSession()
	{
		$this->Komputer_model->addSession();
		redirect('komputer');
	}

	public function login()
	{
		$session = $this->session->userdata();
		if (!$session) {
			redirect('komputer');
		} else {
			$this->load->view('komputer/login');
		}
	}

	public function tambah()
	{
		$this->load->view('komputer/tambah');
	}

	public function add()
	{
		$rules = $this->Komputer_model->validationBarang();
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('komputer/tambah');
		} else {
			$this->Komputer_model->insertBarang();
			redirect('komputer');
		}
	}

	public function ubah($id)
	{
		$data['barang'] = $this->Komputer_model->getDetailBarang($id);
		$this->load->view('komputer/update', $data);
	}

	public function edit()
	{
		$this->Komputer_model->editBarang();
		redirect('komputer');
	}

	public function delete($id)
	{
		$this->Komputer_model->deleteBarang($id);
		redirect('komputer');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('komputer/login');
	}
}


/* End of file Komputer.php */
/* Location: ./application/controllers/Komputer.php */
