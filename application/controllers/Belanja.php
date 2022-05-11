<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Belanja_model');
	}

	public function index()
	{
		$data['barang'] = $this->Belanja_model->getBarang();
		$this->load->view('belanja/detail', $data);
	}

	public function add()
	{
		$rules = $this->Belanja_model->validation();
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('belanja/tambah');
		} else {
			$this->Belanja_model->insertBarang();
			redirect('belanja');
		}
	}

	public function tambah()
	{
		$this->load->view('belanja/tambah');
	}

	public function ubah($id)
	{
		$data['barang'] = $this->Belanja_model->getDetailBarang($id);
		$this->load->view('belanja/update', $data);
	}

	public function edit($id)
	{
		$rules = $this->Belanja_model->validation();
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$data['barang'] = $this->Belanja_model->getDetailBarang($id);
			$this->load->view('belanja/update', $data);
		} else {
			$this->Belanja_model->editBarang();
			redirect('belanja');
		}
	}

	public function delete($id)
	{
		$this->Belanja_model->deleteBarang($id);
		redirect('belanja');
	}

	public function checkout()
	{
		$this->Belanja_model->insertCart();
		$this->cart->destroy();
		redirect('belanja');
	}
}


/* End of file Belanja.php */
/* Location: ./application/controllers/Belanja.php */
