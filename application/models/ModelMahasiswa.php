<?php if ( ! defined('BASEPATH')) exit('No direct script
access allowed');
class ModelMahasiswa extends CI_Model {
    public $variable;
    
    public function __construct()
    {
    parent::__construct();
    }
    
    function getData()
    {
        $data =  array(
			'nama'    => 'I Wayan Ari Sanjaya',
			'nim'     => '2015354053',
			'alamat'  => 'Jalan Metila No.5, Lingkungan Bualu',
            'telepon' => '089702828769'
		);
		return $data;
    }
}
