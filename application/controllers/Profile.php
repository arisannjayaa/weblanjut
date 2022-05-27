<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$data = [
			'head'	 => 'Profile',
			'title'	 => 'Ari Sanjaya | Profile',
			'profile' => [
				'nama'	  => 'I Wayan Ari Sanjaya',
				'alamat'  => 'Jalan Metila No. 5',
				'nim'	  => '2015354053',
				'jurusan' => 'Teknik Elektro',
				'prodi'	  => 'TRPL'
			]
		];

		$this->load->view('template/header', $data);
		$this->load->view('profile/profile', $data);
		$this->load->view('template/footer');
	}

	public function sosmed()
	{

		$data = [
			'head'	 => 'Sosial Media',
			'title'	 => 'Ari Sanjaya | Sosmed',
			'sosmed' => [
				'instagram' => 'arysannjayaa',
				'facebook'  => 'arysannjayaa',
				'line'		=> 'arysannjaya',
				'tiktok'	=> 'rxxy'
			]
		];

		$this->load->view('template/header', $data);
		$this->load->view('profile/sosialmedia', $data);
		$this->load->view('template/footer');
	}
}


/* End of file Sanjaya.php */
/* Location: ./application/controllers/Sanjaya.php */
