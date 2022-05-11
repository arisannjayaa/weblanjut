<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Barang_model');
  }

  public function index()
  {
    $data['barang'] = $this->Barang_model->getBarang();
    $this->load->view('barang/detail', $data);
  }

  public function tambah()
  {
    $this->load->view('barang/tambah');
  }

  public function add() {
		$rules = $this->Barang_model->validation();
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('barang/tambah');
		} else {
			$this->Barang_model->insertBarang();
			redirect('barang');
		}
  }

	public function ubah($id)
  {
    $data['barang'] = $this->Barang_model->getDetailBarang($id);
    $this->load->view('barang/update', $data);
  }

  public function edit($id)
  {
		$rules = $this->Barang_model->validation();
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE) {
				$data['barang'] = $this->Barang_model->getDetailBarang($id);
				$this->load->view('barang/update', $data);
		} else {
			$this->Barang_model->editBarang();
			redirect('barang');
		}
  }

  public function delete($id)
  {
    $this->Barang_model->deleteBarang($id);
    redirect('barang');
  }

}


/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */