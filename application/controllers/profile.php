<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller
{

     function change_data()
     {
         $this->load->model('register_model');
         $data['pages'] = $this->menu_model->get_pages();
         $this->load->library('form_validation');
         $this->form_validation->run();
         $data['pages_info'] = $this->register_model->get_info('change_data');
         $data['user'] = $this->session->userdata('user');
         $data['user_info']['status'] = $this->session->userdata('status');
         $data['user_info']['avatar'] = $this->session->userdata('avatar');
         $data['user_info']['firstname'] = $this->session->userdata('firstname');
         $data['user_info']['lastname'] = $this->session->userdata('lastname');
         $data['user_info']['adress'] = $this->session->userdata('adress');
         $data['user_info']['email'] = $this->session->userdata('email');
         $data['error'] = '';
         if( ! empty($data['user'])) {
             $name = 'change_data';
             $this->template->page_view($data, $name);
             if($this->input->post('save')){
                 $this->load->model('profile_model');
                 $lastname = $this->input->post('lastname');
                 $firstname = $this->input->post('firstname');
                 $email = $this->input->post('email');
                 $adress = $this->input->post('adress');
                 $change['lastname'] = $lastname;
                 $change['firstname'] = $firstname;
                 $change['email'] = $email;
                 $change['adress'] = $adress;
                 $this->profile_model->change_data($data['user'], $change);
                 $info_msg = 'Данные успешно изменены';
                 $data['error'] = $info_msg;
                 $this->template->page_view($data, $name);
             }
         } else {
             $data['error'] = 'Войдите в личный кабинет';
         }
     }

    /*function password()
    {
        $this->load->model('register_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->register_model->get_info('password');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $name = 'password';
        $data['error'] = '';
        $this->template->page_view($data, $name);
    }*/
    
    }