<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{


    public function index()
    {
        $this->load->model('register_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->register_model->get_info('register');
        $name = 'register';

        if($this->input->post('Register'))
            (

            ) else
            (
            $this->template->page_view($data, $name);
            )
    }
}
