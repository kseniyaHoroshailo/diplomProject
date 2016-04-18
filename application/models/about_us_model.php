<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About_us_model extends CI_Model
{

    public function get_about_us($title)
    {
        $this->db->where('title_en', $title);
        $query = $this->db->get('pages');
        return $query->row_array();

    }

}