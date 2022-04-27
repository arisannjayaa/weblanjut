<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function validation()
	{
		return [
			[
				'field' => 'nama',
				'label'	=> 'Nama',
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'email',
				'label'	=> 'Email',
				'rules' => 'required|valid_email|max_length[32]'
			],
			[
				'field' => 'alamat',
				'label'	=> 'Alamat',
				'rules' => 'required'
			],
		];
	}

  // ------------------------------------------------------------------------

}

/* End of file Form_model.php */
/* Location: ./application/models/Form_model.php */