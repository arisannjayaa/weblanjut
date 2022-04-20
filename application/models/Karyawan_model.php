<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Karyawan_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------

	public function insertKaryawan()
	{
		$insert = array(
		'jabatan' => $this->input->post('jabatan'),
		'hari' 	  => $this->input->post('hari')
		);
		$result = $insert;
		return $result;
	}
	
}

/* End of file Karyawan_model.php */
/* Location: ./application/models/Karyawan_model.php */
