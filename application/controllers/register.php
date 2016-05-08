<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function index()
    {
        $this->load->model('register_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->register_model->get_info('authorization');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        if(empty($data['user'])) {
            $name = 'authorization';
        } else {
            $name = 'personalarea';
        }
        $data['error'] = '';
        $this->template->page_view($data, $name);
        if ($this->input->post('log') && $this->input->post('username') && $this->input->post('password')) {
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->login_rules);
            $chesk = $this->form_validation->run();
            if ($chesk == TRUE) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $login_check = $this->register_model->login($username, $password );
                if ($login_check == TRUE) {
                    $data['user_info'] = $this->register_model->user_info($username);
                    $ses_data = array(
                        'user' => $username,
                        'status' => $data['user_info']['status'],
                        'avatar' => $data['user_info']['avatar'],
                        'firstname' => $data['user_info']['firstname'],
                        'lastname' => $data['user_info']['lastname'],
                        'adress' => $data['user_info']['adress'],
                        'email' => $data['user_info']['email']
                    );
                    $this->session->set_userdata($ses_data);
                    redirect(base_url('index.php/register'));
                } else $data['error'] = "Проверьте введённые данные";

            } else $data['error'] = "Проверьте введённые данные";

        } else $data['error'] = "Вы обратились к странице без параметров";
            //$this->template->page_view($data, $name);
    }

    public function reg()
    {
        $this->load->model('register_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->register_model->get_info('register');
        $name = 'register';
        $data['error'] = '';
        if ($this->input->post('register')) {
            $this->load->model('rules_model');
            $this->form_validation->set_rules($this->rules_model->reg_rules);
            $chesk = $this->form_validation->run();
            if ($chesk == TRUE) {
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $password_again = $this->input->post('password2');
                $login_check = $this->register_model->check_login($username);
                if ($login_check == FALSE) {
                    $info_msg = "Логин занят";
                }
                if ($password != $password_again) {
                    $info_msg = "Пароли не совпадают";
                }
                if($login_check == TRUE && $password==$password_again)
                {
                    $new['username'] = $username;
                    $new['email'] = $email;
                    $new['password'] = $password;

                    $this->register_model->save_data($new);
                    $info_msg = "";
                    $this->template->page_view($data, 'register_succes');

                }
                $data['error'] = $info_msg;
                $this->template->page_view($data, $name);
            } else {
                $this->template->page_view($data, $name);
            }
        } else {
            $this->template->page_view($data, $name);
        }
    }

    function logout(){
        $this->session->unset_userdata('user');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('avatar');
        redirect(base_url('index.php'));
    }
}
