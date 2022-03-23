<?php if ( ! defined('BASEPATH')) exit('No direct script
access allowed');

class M_Model extends CI_Model {
    public $variable;
    
    public function __construct()
    {
    parent::__construct();
    }
    
    function getString()
    {
    $string = "Saya Cinta Framework Codeigniter";
    return $string;
    }
}