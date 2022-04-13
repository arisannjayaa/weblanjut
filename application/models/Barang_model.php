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
    $result = $this->db->get('barang');
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
    $result = $this->db->insert('barang', $insert);
    return $result;
  }

  public function deleteMahasiswa($id)
  {
    $this->db->where('id_brg', $id);
    $result = $this->db->delete('barang');
    return $result;
  }

  public function editMahasiswa()
  {
    $edit = array(
          'nama_brg' => $this->input->post('nama'),
          'jenis_brg' => $this->input->post('jenis'),
          'deskripsi_brg' => $this->input->post('deskripsi'),
          'qty_brg' => $this->input->post('qty'),
          'harga_brg' => $this->input->post('harga')
    );
    $this->db->where('id_brg', $this->input->post('id'));
    $result = $this->db->update('barang', $edit);
    return $result;
  }

  public function getDetailBarang($id)
  {
    $this->db->where('id_brg', $id);
    $result = $this->db->get('barang');
    return $result;
  }

  // ------------------------------------------------------------------------

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */