<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller{

    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('m_soal');
        $this->load->helper('url');
        if ($this->session->userdata('status')!=='login') {
            redirect(base_url('admin'));
        }
    }
    public function index()
    {
        
        $data['peserta'] = $this->User_model->count_peserta();
        $data['total_soal'] = $this->m_soal->all_test();
        $header['nama'] = $this->session->userdata('nama');
        $header['judul'] = "Selamat Datang";
        $this->load->view('header', $header);
        $this->load->view('admin/home', $data);
        $this->load->view('footer');
    }
    
    public function tes_1()
    {
        $data_soal['soal'] = $this->m_soal->get_soal_1();
        $header['judul'] = "Tes 1";
        $this->load->view('header', $header);
        $this->load->view('admin/tes_1', $data_soal);
        $this->load->view('footer');
    }
    public function edit_tes_1($id)
    {
        $where = array('id_soal'=>$id);
        $data['soal']=$this->m_soal->edit_soal('soal',$where);
        $header['judul'] = "Edit Tes 1";
        $this->load->view('header', $header);
        $this->load->view('admin/edit_tes_1', $data);
        $this->load->view('footer');
    }
    public function tes_2()
    {
        $data_soal['soal'] = $this->m_soal->get_soal_2();
        $header['judul'] = "Tes 2";
        $this->load->view('header', $header);
        $this->load->view('admin/tes_2', $data_soal);
        $this->load->view('footer');
    }
    public function edit_tes_2($id)
    {
        $where = array('id_soal' => $id);
        $data['soal'] = $this->m_soal->edit_soal('soal', $where);
        $header['judul'] = "Edit Tes 2";
        $this->load->view('header', $header);
        $this->load->view('admin/edit_tes_2', $data);
        $this->load->view('footer');
    }
    public function tes_3()
    {
        $header['judul'] = "Tes 3";
        $data_soal['soal'] = $this->m_soal->get_soal_3();
        $this->load->view('header', $header);
        $this->load->view('admin/tes_3', $data_soal);
        $this->load->view('footer');
    }
    public function edit_tes_3($id)
    {
        $header['judul'] = "Edit Tes 3";
        $where = array('id_soal' => $id);
        $data_soal['soal'] = $this->m_soal->edit_soal('soal',$where);
        $this->load->view('header', $header);
        $this->load->view('admin/edit_tes_3', $data_soal);
        $this->load->view('footer');
    }
    public function tes_4()
    {
        $header['judul'] = "Tes 4";
        $data_soal['soal'] = $this->m_soal->get_soal_4();
        $this->load->view('header', $header);
        $this->load->view('admin/tes_4', $data_soal);
        $this->load->view('footer');
    }
    public function edit_tes_4($id)
    {
        $header['judul'] = "Edit Tes 4";
        $where = array('id_soal' => $id);
        $data_soal['soal'] = $this->m_soal->edit_soal('soal', $where);
        $this->load->view('header', $header);
        $this->load->view('admin/edit_tes_4', $data_soal);
        $this->load->view('footer');
    }
    public function tes_5()
    {
        $header['judul'] = "Tes 5";
        $data_soal['soal'] = $this->m_soal->get_soal_5();
        $this->load->view('header', $header);
        $this->load->view('admin/tes_5', $data_soal);
        $this->load->view('footer');
    }
    public function edit_tes_5($id)
    {
        $header['judul'] = "Edit Tes 5";
        $where = array('id_soal' => $id);
        $data_soal['soal'] = $this->m_soal->edit_soal('soal', $where);
        $this->load->view('header', $header);
        $this->load->view('admin/edit_tes_5', $data_soal);
        $this->load->view('footer');
    }
    public function peserta()
    {
        $header['judul'] = "List Peserta";
        $data['peserta'] = $this->User_model->get_peserta();
        $this->load->view('header', $header);
        $this->load->view('admin/peserta', $data);
        $this->load->view('footer');
    }
    public function user()
    {
        $header['judul'] = "User";
        $data['user'] = $this->User_model->get_user();
        $this->load->view('header', $header);
        $this->load->view('admin/user', $data);
        $this->load->view('footer');
    }
    public function edit_user($id)
    {
        $header['judul'] = "Edit User";
        $where = array('id_user' => $id);
        $data['user'] = $this->User_model->get_user_where('user', $where);
        $this->load->view('header', $header);
        $this->load->view('admin/edit_user', $data);
        $this->load->view('footer');
    }

    

    
    
}

/* End of file dashboard.php */
