<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $this->load->model('admin_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->admin_model->get_info('admin');
        $name = 'admin';
        $this->template->page_view($data, $name);
        if ($this->input->post('enter')) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == 'admin' && $password =='admin') {
                    $ses_data = array(
                        'user' => $username
                    );
                    $this->session->set_userdata($ses_data);
                   // redirect(base_url() / 'index.php/adminmain');
                } $this->template->page_view($data, $name);
            } else $this->template->page_view($data, $name);

    }
}
