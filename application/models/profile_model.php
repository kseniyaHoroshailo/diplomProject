<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model
{
    function change_data($user, $change) {
        $this->db->where('username', $user);
        $this->db->update('client',$change);
    }


}