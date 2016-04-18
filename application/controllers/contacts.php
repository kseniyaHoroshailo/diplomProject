<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {


    public function index()
    {
        $this->load->model('about_us_model');
        $data['pages'] = $this->menu_model->get_pages();
        //$data['pages_info'] = $this->menu_model->get_pages_info($title);
        $name = 'contacts';
        $this->template->page_view($data, $name);
    }
}
