<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
		$this->load->model('Form_model');
  }

  public function index()
  {
    $this->load->view('validasi/form');
  }

	public function input()
	{
		$rules = $this->Form_model->validation();
		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('validasi/form');
		} else {
			$data = array(
						'nama'	=> $this->input->post('nama'),
						'email'	=> $this->input->post('email'),
						'alamat'	=> $this->input->post('alamat'),
			);
			$this->load->view('validasi/hasil', $data);
		}
	}

}


/* End of file Form.php */
/* Location: ./application/controllers/Form.php */