<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmessages_model extends CI_Model {

    public function get_catalog($title)
    {
        $this->db->where('title_en', $title);
        $query = $this->db->get('tech_sections');
        return $query->row_array();

    }

    function get_messages()
    {
        $query = $this->db->get('messages');
        return $query->result_array();
    }

    function get_info($title)
    {
        $this->db->where('title_en' , $title);
        $query = $this->db->get('tech_sections');
        return $query->row_array();
    }

}
