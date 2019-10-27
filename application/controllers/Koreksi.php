<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Koreksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_soal');
        $this->load->library('form_validation');
        // if ($this->session->userdata('status') !== 'login') {
        //     redirect(base_url('welcome'));
        // }
        
    }

    function index()
    {
        $id = $this->input->post('id_soal');
        $nomor_peserta = $this->session->userdata('nomor_peserta');
        $id_psikotes = $this->session->userdata('id_psikotes');
        $_jawaban = $this->input->post('jawaban');
        $nama_tes = $this->input->post('nama_tes');
        $jumlah = count($id);

        for ($i=0; $i < $jumlah ; $i++) { 
            $nomor=$id[$i];
            
            if ($_jawaban[$nomor] == null) {
                // jawaban kosong
                $data_jawaban = array(
                    'id_soal' => $nomor,
                    'id_psikotes' => $id_psikotes,
                    'nama_soal'=> $nama_tes,
                    'score' => 0
                );
                // echo $nomor . " kosong " . $jawaban ."<br>";
                $this->db->insert('score', $data_jawaban);
            }else {
                $jawaban = $_jawaban[$nomor];
                $where = array('id_soal' => $nomor, 'jawaban' => $jawaban);
                $table = "soal";
                $cek = $this->m_soal->koreksi_soal($table, $where);
                $c = $cek->num_rows();
                if ($c == 1) {
                    // jawaban benar
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 1
                    );
                    // echo $nomor . " Benar " . $jawaban . "<br>";
                    $this->db->insert('score', $data_jawaban);
                }else {
                    // jawaban salah
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 0
                    );
                    $this->db->insert('score', $data_jawaban);
                    // echo $nomor." Salah ". $jawaban . "<br>";
                }

            }
        }

        
        redirect(base_url('psikotes/tes_2'));
        
        
        
    }
    function tes_2()
    {
        $id = $this->input->post('id_soal');
        $nomor_peserta = $this->session->userdata('nomor_peserta');
        $id_psikotes = $this->session->userdata('id_psikotes');
        $_jawaban = $this->input->post('jawaban');
        $nama_tes = $this->input->post('nama_tes');
        $jumlah = count($id);

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $id[$i];

            if (empty($_jawaban[$nomor])) {
                // jawaban kosong
                $data_jawaban = array(
                    'id_soal' => $nomor,
                    'id_psikotes' => $id_psikotes,
                    'nama_soal' => $nama_tes,
                    'score' => 0
                );
                $this->db->insert('score', $data_jawaban);
            } else {
                $jawaban = $_jawaban[$nomor];
                $where = array('id_soal' => $nomor, 'jawaban' => $jawaban);
                $table = "soal";
                $cek = $this->m_soal->koreksi_soal($table, $where);
                $c = $cek->num_rows();
                if ($c == 1) {
                    // jawaban benar
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 1
                    );
                    $this->db->insert('score', $data_jawaban);
                } else {
                    // jawaban salah
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 0
                    );
                    $this->db->insert('score', $data_jawaban);
                }
            }
        }

        redirect(base_url('psikotes/tes_3'));
        
    }
    function tes_3()
    {
        $id = $this->input->post('id_soal');
        $nomor_peserta = $this->session->userdata('nomor_peserta');
        $id_psikotes = $this->session->userdata('id_psikotes');
        $_jawaban = $this->input->post('jawaban');
        $nama_tes = $this->input->post('nama_tes');
        $jumlah = count($id);

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $id[$i];

            if (empty($_jawaban[$nomor])) {
                // jawaban kosong
                $data_jawaban = array(
                    'id_soal' => $nomor,
                    'id_psikotes' => $id_psikotes,
                    'nama_soal' => $nama_tes,
                    'score' => 0
                );
                $this->db->insert('score', $data_jawaban);
                
            } else {
                $jawaban = $_jawaban[$nomor];
                $where = array('id_soal' => $nomor, 'jawaban' => $jawaban);
                $table = "soal";
                $cek = $this->m_soal->koreksi_soal($table, $where);
                $c = $cek->num_rows();
                if ($c == 1) {
                    // jawaban benar
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 1
                    );
                    $this->db->insert('score', $data_jawaban);
                } else {
                    // jawaban salah
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 0
                    );
                    $this->db->insert('score', $data_jawaban);
                }
            }
        }
        redirect(base_url('psikotes/tes_4'));
    }
    function tes_4()
    {
        $id = $this->input->post('id_soal');
        $nomor_peserta = $this->session->userdata('nomor_peserta');
        $id_psikotes = $this->session->userdata('id_psikotes');
        $_jawaban = $this->input->post('jawaban');
        $nama_tes = $this->input->post('nama_tes');
        $jumlah = count($id);

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $id[$i];

            if (empty($_jawaban[$nomor])) {
                // jawaban kosong
                $data_jawaban = array(
                    'id_soal' => $nomor,
                    'id_psikotes' => $id_psikotes,
                    'nama_soal' => $nama_tes,
                    'score' => 0
                );
                $this->db->insert('score', $data_jawaban);
                
            } else {
                $jawaban = $_jawaban[$nomor];
                $where = array('id_soal' => $nomor, 'jawaban' => $jawaban);
                $table = "soal";
                $cek = $this->m_soal->koreksi_soal($table, $where);
                $c = $cek->num_rows();
                if ($c == 1) {
                    // jawaban benar
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 1
                    );
                    $this->db->insert('score', $data_jawaban);

                    
                } else {
                    // jawaban salah
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 0
                    );
                    $this->db->insert('score', $data_jawaban);
                    
                }
            }
        }
        redirect(base_url('psikotes/tes_5'));

        
    }
    function tes_5()
    {
        $id = $this->input->post('id_soal');
        $nomor_peserta = $this->session->userdata('nomor_peserta');
        $id_psikotes = $this->session->userdata('id_psikotes');
        $_jawaban = $this->input->post('jawaban');
        $nama_tes = $this->input->post('nama_tes');
        $jumlah = count($id);

        for ($i = 0; $i < $jumlah; $i++) {
            $nomor = $id[$i];

            if (empty($_jawaban[$nomor])) {
                // jawaban kosong
                $data_jawaban = array(
                    'id_soal' => $nomor,
                    'id_psikotes' => $id_psikotes,
                    'nama_soal' => $nama_tes,
                    'score' => 0
                );
                $this->db->insert('score', $data_jawaban);
                
            } else {
                $jawaban = $_jawaban[$nomor];
                $where = array('id_soal' => $nomor, 'jawaban' => $jawaban);
                $table = "soal";
                $cek = $this->m_soal->koreksi_soal($table, $where);
                $c = $cek->num_rows();
                if ($c == 1) {
                    // jawaban benar
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 1
                    );
                    $this->db->insert('score', $data_jawaban);

                    
                } else {
                    // jawaban salah
                    $data_jawaban = array(
                        'id_soal' => $nomor,
                        'id_psikotes' => $id_psikotes,
                        'nama_soal' => $nama_tes,
                        'score' => 0
                    );
                    $this->db->insert('score', $data_jawaban);
                    
                }
            }
        }

        redirect(base_url('psikotes/selesai'));

    }
    
        
        
}

/* End of file filename.php */
