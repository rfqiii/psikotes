<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('User_model');
        
        
        
    }

    
    public function index()
    {
        $header['judul'] = "Halaman Login";
        $this->load->view('welcome/header', $header);
        $this->load->view('admin/login');
        $this->load->view('welcome/footer');
    }

    public function login_admin()
    {
        $required = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s tidak boleh kosong</strong> 
                                    </div>';
        $this->form_validation->set_rules('username', 'Username', 'required', array('required'=>$required));
        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => $required));
        
        if ($this->form_validation->run() == FALSE) {
            
            redirect(base_url('admin'));
            
        } else {
            $username = $this->input->post('username');
            $password = md5($_POST['password']);
            $cek = $this->User_model->cek_login($username,$password)->num_rows();
            $user = $this->User_model->cek_login($username, $password)->row_array();
            if ($cek>0) {
                
                
                $data = array(
                    'username' => $user['user'],
                    'nama' => $user['nama'],
                    'status' => 'login'
                );
                
                $this->session->set_userdata( $data );
                redirect(base_url('dashboard'));
                
            }else {
                
                redirect('admin');
                
            }
        }
        
    }
    public function logout_admin()
    {
        $this->session->sess_destroy();
        
        redirect(base_url('admin'));
        
    }

}

/* End of file C_Admin.php */
