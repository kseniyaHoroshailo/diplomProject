<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {


    public function index()
    {
       redirect(base_url());
    }

    public function page($title)
    {
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->menu_model->get_pages_info($title);
        $name = 'index';
        $this->template->page_view($data, $name);
    }
}
