<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class soal extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Register');
        $this->load->database();
        
    }
    

    public function tambah_soal_1()
    {
        $_soal = array(
            'soal_1' => $this->input->post('soal_1'),
            'soal_2' => $this->input->post('soal_2'),
            'soal_3' => $this->input->post('soal_3'),
            'soal_4' => $this->input->post('soal_4'),
            'soal_5' => $this->input->post('soal_5'),
            'soal_6' => $this->input->post('soal_6'),
            'soal_7' => $this->input->post('soal_7'),
            'soal_8' => $this->input->post('soal_8'),
            
        );

        $soal = json_encode($_soal);

        $nama_soal = "tes_1";
        $jawaban = $this->input->post('jawaban');
        
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' =>$jawaban
        );

        $this->M_Register->tambah_soal_1($data);
        redirect('dashboard/tes_1');
    }

    public function edit_soal_1()
    {
        $_soal = array(
            'soal_1' => $this->input->post('soal_1'),
            'soal_2' => $this->input->post('soal_2'),
            'soal_3' => $this->input->post('soal_3'),
            'soal_4' => $this->input->post('soal_4'),
            'soal_5' => $this->input->post('soal_5'),
            'soal_6' => $this->input->post('soal_6'),
            'soal_7' => $this->input->post('soal_7'),
            'soal_8' => $this->input->post('soal_8'),

        );
        $id = $this->input->post('id_soal');
        $soal = json_encode($_soal);
        $nama_soal = "tes_1";
        $jawaban = $this->input->post('jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->where('id_soal', $id);
        $this->db->update('soal', $data);
        redirect('dashboard/tes_1');
    }
    public function hapus_soal()
    {
        $id = $this->input->post('id_soal');
                
        $this->db->where('id_soal', $id);
        $this->db->delete('soal');

        redirect('dashboard/tes_1');
    }
    public function tambah_soal_2()
    {
        $_soal = array(
            'soal' => $_POST['soal'],
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3')
        );
        $nama_soal = "tes_2";
        $soal=json_encode($_soal);
        $jawaban=$this->input->post('jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->insert('soal', $data);
        redirect('dashboard/tes_2');
    }
    public function edit_soal_2()
    {
        $id_soal = $this->input->post('id');
        $_soal = array(
            'soal' => $_POST['soal'],
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3')
        );
        $nama_soal = "tes_2";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
// print_r($data) ;
// echo $id_soal;

        $this->db->where('id_soal', $id_soal);
        $this->db->update('soal', $data);
        redirect('dashboard/tes_2');
    }
    public function tambah_soal_3()
    {
        $_soal = array(
            
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3')
        );
        $nama_soal = "tes_3";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('Jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->insert('soal', $data);
        redirect('dashboard/tes_3');
    }
    public function edit_soal_3()
    {
        $id_soal = $this->input->post('id');
        $_soal = array(
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3')
        );
        $nama_soal = "tes_3";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('Jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->where('id_soal', $id_soal);
        $this->db->update('soal', $data);
        redirect('dashboard/tes_3');
    }
    public function tambah_soal_4()
    {
        $_soal = array(
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3')
        );
        $nama_soal = "tes_4";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('Jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->insert('soal', $data);
        redirect('dashboard/tes_4');
    }
    public function edit_soal_4()
    {
        $id_soal = $this->input->post('id');
        $_soal = array(
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3')
        );
        $nama_soal = "tes_4";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('Jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->where('id_soal', $id_soal);
        $this->db->update('soal', $data);
        redirect('dashboard/tes_4');
    }
    public function tambah_soal_5()
    {
        $_soal = array(
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3'),
            'option_4' => $this->input->post('option_4'),
            'option_5' => $this->input->post('option_5'),
            'option_6' => $this->input->post('option_6')
            
        );
        $nama_soal = "tes_5";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('Jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->insert('soal', $data);
        redirect('dashboard/tes_5');
    }
    public function edit_soal_5()
    {
        $id_soal = $this->input->post('id');
        $_soal = array(
            'option_1' => $this->input->post('option_1'),
            'option_2' => $this->input->post('option_2'),
            'option_3' => $this->input->post('option_3'),
            'option_4' => $this->input->post('option_4'),
            'option_5' => $this->input->post('option_5'),
            'option_6' => $this->input->post('option_6')
        );
        $nama_soal = "tes_5";
        $soal = json_encode($_soal);
        $jawaban = $this->input->post('Jawaban');
        $data = array(
            'nama_soal' => $nama_soal,
            'soal' => $soal,
            'jawaban' => $jawaban
        );
        $this->db->where('id_soal', $id_soal);
        $this->db->update('soal', $data);
        redirect('dashboard/tes_5');
    }


    

}

/* End of file soal.php */
