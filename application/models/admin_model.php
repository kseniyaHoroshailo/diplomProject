<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    function get_info($title)
    {
        $this->db->where('title_en' , $title);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

    /*function check_login($username)
    {
        $this->db->where('username', $username);
        $this->db->select('username');
        $query = $this->db->get('client');
        if($query->num_rows() > 0)
        {
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }*/

    /*function save_data($new)
    {
        $this->db->insert('client',$new);
    }*/

    function login($user, $pswd)
    {
        $this->db->where('username', $user);
        $this->db->where('password', $pswd);
        $this->db->select('username');
        $query = $this->db->get('client');
        if($query->num_rows() > 0)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function user_info($user){
        $this->db->where('username', $user);
        $query = $this->db->get('client');
        return $query->row_array();
    }
}
