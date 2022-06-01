<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko_model extends CI_Model
{
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

	public function read()
	{
		$query = $this->db->get('tb_barang');
		return $query;
	}

	public function create()
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

	public function delete($id)
	{
		$this->db->where('id_brg', $id);
		$query = $this->db->delete('tb_barang');
		return $query;
	}

	public function get($id)
	{
		$this->db->where('id_brg', $id);
		$query = $this->db->get('tb_barang');
		return $query->result_array();
	}

	public function edit()
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
}


/* End of file Toko_model.php and path \application\models\Toko_model.php */
