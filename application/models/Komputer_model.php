<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komputer_model extends CI_Model
{

	// ------------------------------------------------------------------------

	public function __construct()
	{
		parent::__construct();
	}

	public function validationBarang()
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

	public function login()
	{
	}

	public function getBarang()
	{
		$result = $this->db->get('tb_barang');
		return $result;
	}

	public function insertBarang()
	{
		$insert = array(
			'nama_barang' => $this->input->post('nama'),
			'jenis_barang' => $this->input->post('jenis'),
			'deskripsi_barang' => $this->input->post('deskripsi'),
			'qty_barang' => $this->input->post('qty'),
			'harga_barang' => $this->input->post('harga')
		);
		$result = $this->db->insert('tb_barang', $insert);
		return $result;
	}

	public function getDetailBarang($id)
	{
		$this->db->where('id_barang', $id);
		$result = $this->db->get('tb_barang');
		return $result;
	}

	public function editBarang()
	{
		$edit = array(
			'nama_barang' => $this->input->post('nama'),
			'jenis_barang' => $this->input->post('jenis'),
			'deskripsi_barang' => $this->input->post('deskripsi'),
			'qty_barang' => $this->input->post('qty'),
			'harga_barang' => $this->input->post('harga')
		);
		$this->db->where('id_barang', $this->input->post('id'));
		$result = $this->db->update('tb_barang', $edit);
		return $result;
	}

	public function deleteBarang($id)
	{
		$this->db->where('id_barang', $id);
		$result = $this->db->delete('tb_barang');
		return $result;
	}

	public function addSession()
	{
		$array = array(
			'user' => $this->input->post('user'),
			'pass' => $this->input->post('pass')
		);

		$result = $this->session->set_userdata($array);
		return $result;
	}
}

/* End of file Komputer_model.php */
/* Location: ./application/models/Komputer_model.php */
