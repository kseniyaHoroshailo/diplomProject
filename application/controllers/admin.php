<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->model('admin_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->admin_model->get_info('admin');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        if(empty($data['user'])) {
            $name = 'admin';
        } else {
            $name = 'adminindex';
        }
        $data['error'] = '';
        $this->template->page_view($data, $name);
        if ($this->input->post('enter') && $this->input->post('username') && $this->input->post('password')) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $login_check = $this->admin_model->login('admin', $password );
                if ($login_check == TRUE) {
                    $data['user_info'] = $this->admin_model->user_info($username);
                    $ses_data = array(
                        'user' => $username,
                        'status' => $data['user_info']['status'],
                        'avatar' => $data['user_info']['avatar']
                    );
                    $this->session->set_userdata($ses_data);
                    redirect(base_url('index.php/admin'));
                } else $data['error'] = "Проверьте введённые данные";

        } else $data['error'] = "Вы обратились к странице без параметров";
        //$this->template->page_view($data, $name);
    }
    
    function logout(){
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('status');
        redirect(base_url('index.php'));
    }

    function showmessages()
    {
        $this->load->model('adminmessages_model');
        $data['pages'] = $this->menu_model->get_pages();
        $name = 'adminmessages';
        $data['pages_info'] = $this->adminmessages_model->get_info('adminmessages');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $data['messages'] = $this->adminmessages_model->get_messages();
        $this->template->page_view($data, $name);
    }
}
