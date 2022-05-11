<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja_model extends CI_Model
{

	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
	}

	public function validation()
	{
		return [
			[
				'field' => 'nama',
				'label'	=> 'Nama',
				'rules' => 'required|max_length[50]'
			],
			[
				'field' => 'jenis',
				'label'	=> 'Jenis',
				'rules' => 'required|max_length[50]'
			],
			[
				'field' => 'deskripsi',
				'label'	=> 'Deskripsi',
				'rules' => 'required|max_length[50]'
			],
			[
				'field' => 'qty',
				'label'	=> 'Qty',
				'rules' => 'required|integer'
			],
			[
				'field' => 'harga',
				'label'	=> 'Harga',
				'rules' => 'required|integer'
			],
		];
	}

	public function getBarang()
	{
		$result = $this->db->get('tb_barang');
		return $result;
	}

	public function insertBarang()
	{
		$insert = array(
			'nama_brg' => $this->input->post('nama'),
			'jenis_brg' => $this->input->post('jenis'),
			'deskripsi_brg' => $this->input->post('deskripsi'),
			'qty_brg' => $this->input->post('qty'),
			'harga_brg' => $this->input->post('harga')
		);
		$result = $this->db->insert('tb_barang', $insert);
		return $result;
	}

	public function insertKeranjang()
	{
		$this->db->insert('tb_cart', $insert);
	}

	public function getDetailBarang($id)
	{
		$this->db->where('id_brg', $id);
		$result = $this->db->get('tb_barang');
		return $result;
	}

	public function editBarang()
	{
		$edit = array(
			'nama_brg' => $this->input->post('nama'),
			'jenis_brg' => $this->input->post('jenis'),
			'deskripsi_brg' => $this->input->post('deskripsi'),
			'qty_brg' => $this->input->post('qty'),
			'harga_brg' => $this->input->post('harga')
		);
		$this->db->where('id_brg', $this->input->post('id'));
		$result = $this->db->update('tb_barang', $edit);
		return $result;
	}

	public function deleteBarang($id)
	{
		$this->db->where('id_brg', $id);
		$result = $this->db->delete('tb_barang');
		return $result;
	}

	public function insertCart()
	{
		$insert = array(
			'nama_cart' => $this->input->post('nama'),
			'alamat_cart' => $this->input->post('alamat'),
			'telp_cart' => $this->input->post('telp'),
			'harga_cart' => $this->input->post('total')
		);
		$result = $this->db->insert('tb_pembeli', $insert);
		return $result;
	}
}

/* End of file Belanja_model.php */
/* Location: ./application/models/Belanja_model.php */
