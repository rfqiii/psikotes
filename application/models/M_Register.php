<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Register extends CI_Model {

    public $nomor;
    public $nama;
    public $tgl_lahir;
    public $kelamin;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert($data)
    {
        
        $this->db->insert('peserta', $data);
        
        
    }

    public function tambah_soal_1($data)
    {
        $this->db->insert('soal',$data);
    }

    public function get_all_id_soal()
    {
        $this->db->select('soal');
        
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

}

/* End of file Register.php */
