<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mahasiswa_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    
  }

  public function getMahasiswa()
  {
    $result $this->db->join('tb_jurusan', 'tb_mahasiswa.jurusan = tb_jurusan.id', 'inner');
    return $result;
  }

  public function insertMahasiswa()
  {
    $insert = array(
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'jurusan' => $this->input->post('jurusan'),
            'tlp' => $this->input->post('tlp'),
            'alamat' => $this->input->post('alamat')
    );
    $result = $this->db->insert('tb_mahasiswa', $insert);
    return $result;
  }

  public function deleteMahasiswa()
  {
    # code...
  }

  public function updateMahasiswa()
  {
    # code...
  }
  // ------------------------------------------------------------------------

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */