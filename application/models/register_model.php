<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model
{


    function get_info($title)
    {
        $this->db->where('title_en' , $title);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }
}
