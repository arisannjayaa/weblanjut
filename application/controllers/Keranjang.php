<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Keranjang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('belanja/keranjang');
	}

	public function add($id)
	{
		$this->db->where('id_brg', $id);
		$barang = $this->db->get('tb_barang')->result_array();
		$data = array(
			'id' 		=> $barang[0]['id_brg'],
			'qty' 		=> 1,
			'price' 	=> $barang[0]['harga_brg'],
			'name'		=> $barang[0]['nama_brg'],
			'options' => array('description' => $barang[0]['deskripsi_brg'])
		);
		$this->cart->insert($data);
		redirect('belanja');
	}

	public function destroyall()
	{
		$this->cart->destroy();
		redirect('belanja');
	}

	public function konfirmasi()
	{
		$this->load->view('belanja/konfirmasi');
	}
}


/* End of file Keranjang.php */
/* Location: ./application/controllers/Keranjang.php */
