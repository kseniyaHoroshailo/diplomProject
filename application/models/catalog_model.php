<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog_model extends CI_Model {

    public function get_catalog($title)
    {
        $this->db->where('title_en', $title);
        $query = $this->db->get('pages');
        return $query->row_array();

    }

    function get_products($num, $offset)
    {
        $query = $this->db->get('product',$num, $offset);
        return $query->result_array();
    }

    function get_cat()
    {
        $query = $this->db->get('productCategory');
        return $query->result_array();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */