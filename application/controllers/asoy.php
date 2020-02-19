<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class asoy extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_soal');
		$this->load->helper('url');
		
		
	}

	public function index()
	{
		$data['judul']='COBA SOAL';
		$data['soal']=$this->m_soal->get_soal_1();
		$this->load->view('sol', $data);
		
	}

	public function koreksi()
	{
		$id = $this->input->post('id_soal');
		$_jawaban = $this->input->post('jawaban');
		
		$jumlah = count($id);
		$kosong = 0;
		$ans = array();
		for ($i=0; $i <$jumlah ; $i++) {
			$nomor = $id[$i];
			if (!isset($_jawaban[$nomor])) {
				$_jawaban[$nomor]="";
				$kosong++;
			}
			$ans[$nomor] = $_jawaban[$nomor];			
		}
		for ($i=0; $i < $kosong ; $i++) { 
			if (end($ans)=="") {
				array_pop($ans);
			}
		}
		foreach ($ans as $ids => $value) {
			//penilaian
			echo $ids . " = " . $value . "<br>";
		}

		

	}
}


/* End of file asoy.php */
