<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LatihanDb_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  public function inputMhs()
  {
    $mhs = array(
          'nim_mhs' => '2015354053',
          'nama_mhs' => 'Ari Sanjaya',
          'alamat_mhs' => 'Nusa Dua',
          'id_jurusan' => '1'
    );
    $result = $this->db->insert('tb_mahasiswa', $mhs);
    return $result;
    
  }

  public function getAllMhs()
  {
    $result = $this->db->get('tb_mahasiswa');
    return $result;
  }

  public function getJurusan($id)
  {
    $this->db->where('id_jurusan', $id);
    $result = $this->db->get('tb_mahasiswa');
    return $result;
  }

  public function getMhs($id)
  {
    $this->db->where('id_mahasiswa', $id);
    $result = $this->db->get('tb_mahasiswa');
    return $result;
  }

  public function getJoin()
  {
    $this->db->join('tb_jurusan', 'tb_mahasiswa.id_jurusan = tb_jurusan.id_jurusan');
    $result = $this->db->get('tb_mahasiswa');
    return $result;
  }
  
  public function updateMhs($id)
  {
    $mhs = array(
      'nim_mhs' => '2015354053',
      'nama_mhs' => 'I Wayan Ari Sanjaya',
      'alamat_mhs' => 'Nusa Dua, Kuta Selatan',
      'id_jurusan' => '1'
    );
    $this->db->where('id_mahasiswa', $id);
    $result = $this->db->update('tb_mahasiswa', $mhs);
    return $result;
  }
  
  public function deleteMhs($id) {
    
    $this->db->where('id_mahasiswa', $id);
    $result = $this->db->delete('tb_mahasiswa');
    return $result;
  }
  // ------------------------------------------------------------------------

}

/* End of file LatihanDb_model.php */
/* Location: ./application/models/LatihanDb_model.php */