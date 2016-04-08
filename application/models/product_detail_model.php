<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail_model extends CI_Model {

    function get_products($num, $offset)
    {
        $query = $this->db->get('product',$num, $offset);
        return $query->result_array();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */