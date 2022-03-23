<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getData()
	{
		$prodi = "MI";
		return $prodi;
	}

	public function getArray()
	{
		$univ =  array(
			'nama_univ' => 'PNB',
			'nama_prodi' => 'TRPL',
			'matkul' => 'Web Lanjut'
		);
		return $univ;
	}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */