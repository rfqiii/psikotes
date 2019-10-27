<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Psikotes extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('M_Register');
        $this->load->model('m_soal');
        $this->load->helper('url');
        // if ($this->session->userdata('status')!='login') {
        //     redirect(base_url("welcome"));
        // }
    }

    public function tes_1()
    {   
        $data['judul'] = "Tes 1";
        $data['soal'] = $this->m_soal->get_soal_1();
        $this->load->view('psikotes/header', $data);
        $this->load->view('psikotes/tes1', $data);
        $this->load->view('psikotes/footer');
    }
    public function tes_2()
    {
        $data['judul'] = "Tes 2";
        $data['soal'] = $this->m_soal->get_soal_2();
        $this->load->view('psikotes/header', $data);
        $this->load->view('psikotes/tes2', $data);
        $this->load->view('psikotes/footer');
    }
    public function tes_3()
    {
        $data['judul'] = "Tes 3";
        $data['soal'] = $this->m_soal->get_soal_3();
        $this->load->view('psikotes/header', $data);
        $this->load->view('psikotes/tes3', $data);
        $this->load->view('psikotes/footer');
    }
    public function tes_4()
    {
        $data['judul'] = "Tes 4";
        $data['soal'] = $this->m_soal->get_soal_4();
        $this->load->view('psikotes/header', $data);
        $this->load->view('psikotes/tes4', $data);
        $this->load->view('psikotes/footer');
    }
    public function tes_5()
    {
        $data['judul'] = "Tes 5";
        $data['soal'] = $this->m_soal->get_soal_5();
        $this->load->view('psikotes/header', $data);
        $this->load->view('psikotes/tes5', $data);
        $this->load->view('psikotes/footer');
    }
    public function selesai()
    {
        $data['judul'] = "Terima Kasih";
        $this->load->view('welcome/header', $data);
        $this->load->view('psikotes/finish', $data);
        $this->load->view('welcome/footer');
    }

}

/* End of file Psikotes.php */
