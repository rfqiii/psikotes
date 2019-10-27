
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
           
    }

    public function login_peserta()
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

        $this->form_validation->set_rules('nomor', 'Nomor', 'required|max_length[12]|numeric|is_unique[peserta.nomor_peserta]',
            array(
                'required'      => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s tidak boleh kosong</strong> 
                                    </div>',
                'is_unique'     => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s sudah terdaftar</strong> 
                                    </div>',
                'numeric' => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>%s hanya diperbolehkan angka</strong> 
                                </div>'
            )
        );
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|min_length[3]|max_length[30]|alpha_dash_space',
            array(
                'required'      => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s tidak boleh kosong</strong> 
                                    </div>'
            )
        );
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required',
            array(
                'required'      => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>%s tidak boleh kosong</strong> 
                                    </div>'
            ));
        $this->form_validation->set_rules('nomor_telepon', 'Nomor Telepon', 'required|numeric|max_length[15]',
            array(
                'numeric' => '*Hanya diperbolehkan angka',
                'required'=> $required
            ));
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required',
            array(
                'required'      => $required
            ));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('welcome/header');
            $this->load->view('welcome/content');
            $this->load->view('welcome/footer');
        } else {
            $nomor = $this->input->post('nomor');
            $nama = $this->input->post('nama');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $nomor_telepon = $this->input->post('nomor_telepon');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $id_psikotes = 'P'.date('dmyHis');
            $tgl_psikotes = date('Y-m-d');
            $data_peserta = array(
                'nomor_peserta' => $nomor,
                'nama' => $nama,
                'tgl_lahir' => $tgl_lahir,
                'nomor_telepon' => $nomor_telepon,
                'kelamin' => $jenis_kelamin
            );
            $data_psikotes = array(
                'id_psikotes' => $id_psikotes,
                'nomor_peserta' => $nomor,
                'tgl_tes' => $tgl_psikotes
            );
            
            $query = $this->db->where('nomor_peserta', $nomor)->get('peserta');

            if ($query->num_rows() == 0 ) {
                $this->db->insert('peserta', $data_peserta);
                $this->db->insert('psikotes', $data_psikotes);
                
                $data = array(
                    'nomor_peserta' => $nomor,
                    'id_psikotes' => $id_psikotes,
                    'status' => 'login' 
                );
                $this->session->set_userdata( $data );
                redirect(base_url('psikotes/tes_1'));
            }else {
                redirect(base_url('welcome'));
            }
            
        }   
    }

}

/* End of file Controllername.php */



/* End of file login.php */
