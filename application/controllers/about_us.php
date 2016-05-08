<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends CI_Controller {


    public function index()
    {
        $this->load->model('about_us_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->about_us_model->get_pages_info('about_us');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $name = 'about_us';
        $this->template->page_view($data, $name);
    }

}
