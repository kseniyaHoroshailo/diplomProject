<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MainMenu_model extends CI_Model
{


    public function get_pages()
    {
        $this->db->where('hidden','no');
        $query = $this->db->get('pages');
        return $query->result_array();
    }
}
