<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{


  //fungsi cek session logged in
    function is_logged_in()
    {
        return $this->session->userdata('name');
    }

    //fungsi cek level
    function is_level()
    {
        return $this->session->userdata('level');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }



}

/* End of file Login_model.php */

//
// $this->db->where($data);
// return $this->db->get('profil')->num_rows();
