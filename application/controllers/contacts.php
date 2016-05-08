<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller
{

    public function index()
    {
        $this->load->model('contacts_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->menu_model->get_pages_info('contacts');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $name = 'contacts';
        $data['error'] = '';
        $this->template->page_view($data, $name);
    }

    public function send()
    {
        $this->load->library('form_validation');
        $this->load->model('contacts_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->menu_model->get_pages_info('contacts');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $name = 'contacts';
        $data['error'] = '';
        if ($this->input->post('send')) {
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->msg_rules);
            $check = $this->form_validation->run();
            if ($check == TRUE) {
                $msg_data['username'] = $this->input->post('username');
                $msg_data['email'] = $this->input->post('email');
                $msg_data['message'] = $this->input->post('message');
                $msg_data['date'] = date('Y-m-d');

                    $this->contacts_model->send_message($msg_data);

                $this->template->page_view($data, 'send_message');
            } else {
                $this->template->page_view($data, $name);
            }
        } else {
            $this->template->page_view($data, $name);
        }
    }
}
