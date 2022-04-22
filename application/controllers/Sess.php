<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Sess extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
	if($this->session->userdata('nama')) {
		echo "Session : ".$this->session->userdata('nama');
	}else {
		echo "Tidak ada session";
	}

	echo "<br><a href='sess/add'>Save Session</a>";
	echo "<br><a href='sess/del'>Delete Session</a>";
  }

	public function add()
	{
		$data['nama'] = 'I Wayan Ari Sanjaya';
		$this->session->set_userdata($data);
		redirect('sess');
	}

	public function del()
	{
		session_destroy();
		redirect('sess');
	}

}


/* End of file Session.php */
/* Location: ./application/controllers/Session.php */
