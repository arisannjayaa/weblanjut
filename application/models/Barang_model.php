<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Barang_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
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

  // ------------------------------------------------------------------------

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */