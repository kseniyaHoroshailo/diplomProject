<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail_model extends CI_Model {

    function get($id) {
        $results = $this->db->get_where('product', array('id_product' => $id))->result();
        $result = $results[1];
        return $result;
    }
}