<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Session_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

	public function setSesi()
	{
		$array = array(
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass')
		);
		
		$this->session->set_userdata($array);
	}
}

/* End of file Session_model.php */
/* Location: ./application/models/Session_model.php */