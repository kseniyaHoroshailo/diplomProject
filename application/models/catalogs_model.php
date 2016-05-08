<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogs_model extends CI_Model {

    function get_products($num, $offset)
    {
        $query = $this->db->get('product',$num, $offset);
        return $query->result_array();
    }

    function get_category($num)
    {
        $query = $this->db->get('productCategory',$num);
        return $query->result_array();
    }

}
