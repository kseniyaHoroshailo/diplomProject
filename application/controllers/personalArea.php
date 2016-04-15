<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PersonalArea extends CI_Controller {


    public function index()
    {
        $this->load->view('personalArea_view');
    }
}
