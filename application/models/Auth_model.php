<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Auth_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

	public function add()
	{
		$array = array(
					'user' => $this->input->post('user'),
					'pass' => $this->input->post('pass')
		);

		$result = $this->session->set_userdata($array);
		return $result;
	}

  // ------------------------------------------------------------------------

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */