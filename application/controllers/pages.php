<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {


    public function index()
    {
       redirect(base_url());
    }

    public function page($title)
    {
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->menu_model->get_pages_info('pages');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $data['latest_products'] = $this->menu_model->get_latest_products();
        $name = 'index';
        $this->template->page_view($data, $name);
    }
}
