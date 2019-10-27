<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_soal extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function all_test()
    {
        $jumlah = $this->db->get('soal')->num_rows();
        return $jumlah;
    }
    public function get_soal_1()
    {
        $nama_soal = 'tes_1';
        $this->db->select('*');
        $this->db->where('nama_soal', $nama_soal);
        $query = $this->db->get('soal');
        return $query;
    }

    public function get_soal_2()
    {
        $nama_soal = 'tes_2';
        $this->db->select('*');
        $this->db->where('nama_soal', $nama_soal);
        $query = $this->db->get('soal');
        return $query;
    }
    public function get_soal_3()
    {
        $nama_soal = 'tes_3';
        $this->db->select('*');
        $this->db->where('nama_soal', $nama_soal);
        $query = $this->db->get('soal');
        return $query;
    }
    public function get_soal_4()
    {
        $nama_soal = 'tes_4';
        $this->db->select('*');
        $this->db->where('nama_soal', $nama_soal);
        $query = $this->db->get('soal');
        return $query;
    }
    public function get_soal_5()
    {
        $nama_soal = 'tes_5';
        $this->db->select('*');
        $this->db->where('nama_soal', $nama_soal);
        $query = $this->db->get('soal');
        return $query;
    }

    public function edit_soal($where,$table)
    {
        return $this->db->get_where($where, $table);
    }

    public function koreksi_soal($where, $table)
    {
        return $this->db->get_where($where, $table);
    }
}

/* End of file filename.php */
