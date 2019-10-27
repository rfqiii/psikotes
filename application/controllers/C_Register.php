<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Register');
        
        
    }

    public function input()
    {
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('kelamin', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'nomor' => $this->input->post('nomor'),
                'nama' => $this->input->post('nama'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'kelamin' => $this->input->post('kelamin')  
            );
            $this->M_Register->insert($data);
            redirect('psikotes');
        } else {
            $this->load->view('welcome/header');
            $this->load->view('welcome/content');
            $this->load->view('welcome/footer');


        }
    }

}

/* End of file Register.php */
