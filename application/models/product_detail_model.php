<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail_model extends CI_Model {

    function get_products($num, $offset)
    {
        $query = $this->db->get('product',$num, $offset);
        return $query->SELECT * FROM product WHERE product_id = intval($_GET['product_id']);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */