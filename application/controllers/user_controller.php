<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        
        
    }

    public function input_user()
    {
        $required = '<div class="alert alert-warning alert-dismissible show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s tidak boleh kosong</strong> 
                                    </div>';

        $is_unique = '<div class="alert alert-warning alert-dismissible show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s sudah terdaftar</strong> 
                                    </div>';

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.user]', array(
            'required' => $required,
            'is_unique' => $is_unique
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_dash_space', array(
            'required' => $required
        ));
        $this->form_validation->set_rules('email', 'Email', 'required', array(
            'required' => $required
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => $required
        ));
        $this->form_validation->set_rules('passcon', 'Konfirmasi Password', 'required', array(
            'required' => $required
        ));
        
        if ($this->form_validation->run() == FALSE) {
            
            redirect('dashboard/user','refresh');
            
        } else {

            
            $username = $this->input->post('username');
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $data = array('user' => $username,
                            'nama' => $nama,
                            'email'=>$email,
                            'pass'=>$password        
                        );
            $query = $this->db->insert('user', $data);
            if ($query) {
                redirect('dashboard/user', 'refresh');
            }
            
            
            
            
            
        }
        
    }
    public function edit_user()
    {
        $required = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s tidak boleh kosong</strong> 
                                    </div>';

        $is_unique = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s sudah terdaftar</strong> 
                                    </div>';

        $this->form_validation->set_rules('user', 'Username', 'required|min_length[5]|is_unique[user.user]', array(
            'required' => $required,
            'is_unique' => $is_unique
        ));
        $this->form_validation->set_rules('nama', 'Nama', 'required|alpha_dash_space', array(
            'required' => $required
        ));
        $this->form_validation->set_rules('email', 'Email', 'required', array(
            'required' => $required
        ));
        $this->form_validation->set_rules('pass', 'Password', 'required', array(
            'required' => $required
        ));
        $this->form_validation->set_rules('passcon', 'Konfirmasi Password', 'required', array(
            'required' => $required
        ));

        $id = $this->input->post('id_user');
        $username = $this->input->post('user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = md5($this->input->post('pass'));
        if ($this->form_validation->run() == FALSE) {

            
            redirect('dashboard/edit_user/'.$id,'refresh');
            

        } else {

            
            $data = array(
                'user' => $username,
                'nama' => $nama,
                'email' => $email,
                'pass' => $password
            );
            $where = array(
                'id_user' => $id
            );
            $this->user_model->update_user($where, $data, 'user');
            redirect(base_url('dashboard/user'));
            
        }
    }
    public function delete_user($id)
    {
        $where = array(
            'id_user' => $id
        );
        $this->user_model->delete_user($where,'user');
        redirect(base_url('dashboard/user'));
    }

}

/* End of file user_controller.php */
