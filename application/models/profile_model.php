<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    function change_data($user, $change) {
        $this->db->where('username', $user);
        $this->db->update('client',$change);
    }

    function product_info($id){
        $this->db->where('id_product', $id);
        $query = $this->db->get('product');
        return $query->row_array();
    }


}