<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function count_peserta()
    {
        $jumlah = $this->db->get('peserta')->num_rows();
        return $jumlah;
        
    }
    public function insert_peserta($query)
    {
        $this->db->insert('peserta', $query);
    }
    public function get_peserta()
    {
        $select = array(
            'peserta.nomor_peserta',
            'peserta.nama',
            'peserta.kelamin',
            'peserta.nomor_telepon',
            'psikotes.id_psikotes',
            'psikotes.tgl_tes',
            'COUNT(score.score) As score'

        );
        
        $this->db->select($select);
        $this->db->from('peserta');
        $this->db->join('psikotes', 'psikotes.nomor_peserta = peserta.nomor_peserta');
        $this->db->join('score', 'score.id_psikotes = psikotes.id_psikotes');
        $this->db->group_by('score.id_psikotes');
        
        
        $query = $this->db->get();
        return $query;
        
        
        
    }
    public function get_user()
    {
        return $this->db->get('user');
    }
    public function get_user_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function cek_login($username,$password)
    {
        return $this->db->get_where('user', array('user' => $username, 'pass'=>$password));
        
    }
    public function update_user($where,$data,$table)
    {
        $this->db->where($where)->update($table, $data);
        
        
    }
    public function delete_user($where,$table)
    {
        return $this->db->where($where)->delete($table);
        
        
    }
    

   

    

    

}

/* End of file user_model.php */
