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
    $this->db->join('tb_jurusan', 'tb_mahasiswa.id_jurusan = tb_jurusan.id_jurusan', 'inner');
    $result = $this->db->get('tb_mahasiswa');
    return $result;
  }

  public function insertMahasiswa()
  {
    $insert = array(
            'nim_mhs' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama'),
            'id_jurusan' => $this->input->post('jurusan'),
            'tlp_mhs' => $this->input->post('tlp'),
            'alamat_mhs' => $this->input->post('alamat')
    );
    $result = $this->db->insert('tb_mahasiswa', $insert);
    return $result;
  }

  public function deleteMahasiswa()
  {
    # code...
  }

  public function editMahasiswa()
  {
    $edit = array(
            'nim_mhs' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama'),
            'id_jurusan' => $this->input->post('jurusan'),
            'tlp_mhs' => $this->input->post('tlp'),
            'alamat_mhs' => $this->input->post('alamat')
    );
    $this->db->where('id_mhs', $this->input->post('id_mhs'));
    $result = $this->db->update('tb_mahasiswa', $edit);
    return $result;
  }

  public function getDetailMahasiswa($id)
  {
    
    $result = $this->db->get_where('tb_mahasiswa', ['id_mhs' => $id]);
    return $result;
  }
  // ------------------------------------------------------------------------

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */