<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Toko_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Toko Keranjang | Dashboard',
			'barang' => $this->Toko_model->read()->result_array()
		];
		$this->load->view('toko/template/header', $data);
		$this->load->view('toko/dashboard', $data);
		$this->load->view('toko/template/footer');
	}

	public function cart()
	{
		$data = [
			'title' => 'Toko Keranjang | Cart',
			'barang' => $this->Toko_model->read()->result_array()
		];
		$this->load->view('toko/template/header', $data);
		$this->load->view('toko/cart', $data);
		$this->load->view('toko/template/footer');
	}

	public function barang()
	{
		$data = [
			'title' => 'Toko Keranjang | Data Barang',
			'barang' => $this->Toko_model->read()->result_array()
		];
		$this->load->view('toko/template/header', $data);
		$this->load->view('toko/barang', $data);
		$this->load->view('toko/template/footer');
	}

	public function add()
	{
		$data = [
			'title' => 'Toko Keranjang | Tambah Data Barang'
		];
		$this->load->view('toko/template/header', $data);
		$this->load->view('toko/add');
		$this->load->view('toko/template/footer');
	}

	public function insert()
	{
		$this->Toko_model->create();
		redirect('toko/barang');
	}

	public function remove($id)
	{
		$this->Toko_model->delete($id);
		redirect('toko/barang');
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Toko Keranjang | Edit Data Barang',
			'barang' => $this->Toko_model->get($id)
		];
		$this->load->view('toko/template/header', $data);
		$this->load->view('toko/edit', $data);
		$this->load->view('toko/template/footer');
	}

	public function update()
	{
		$this->Toko_model->edit();
		redirect('toko/barang');
	}

	public function addcart($id)
	{
		$this->db->where('id_brg', $id);
		$barang = $this->db->get('tb_barang')->result_array();
		$data = array(
			'id' 		=> $barang[0]['id_brg'],
			'qty' 		=> 1,
			'price' 	=> $barang[0]['harga_brg'],
			'name'		=> $barang[0]['nama_brg'],
			'options' 	=> array('description' => $barang[0]['deskripsi_brg'])
		);
		$this->cart->insert($data);
		redirect('toko/cart');
	}

	public function deleteallcart()
	{
		$this->cart->destroy();
		redirect('toko/cart');
	}
}

/* End of file Toko.php and path \application\controllers\Toko.php */
