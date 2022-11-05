<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelSiswa extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function dataSiswa($data = null)
    {
        return $this->db->insert('siswa', $data);
    }

    public function jmlSiswa()
    {
        return $this->db->get('siswa')->result_array()->count();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->like('nis', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('tgl_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('agama', $keyword);
        return $this->db->get()->result();
    }
}
