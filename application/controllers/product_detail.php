<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail extends CI_Controller {

    function view($title)
    {
        $this->load->model('catalog_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->catalog_model->get_catalogs($title);
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $data['productCategory'] = $this->catalog_model->get_cat();    //вывод категорий товаров
        $name = 'product_detail';
        $this->template->page_view($data, $name);
    }

    function buscet_add($id)
    {
        $this->load->model('register_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->menu_model->get_pages_info('buscet');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $data['error'] = '';
        if( ! empty($data['user'])) {
            $name = 'buscet_add';
            $this->template->page_view($data, $name);
            $this->load->model('product_detail_model');
            $product = $this->product_detail_model->get($this->input->post('id'));
            $insert = array(
                'id'      => $this->input->post('id'),
                'qty'     => 1,
                'price'   => $product['price'],
                'name'    => $product['naimProducts'],
                'imagePath' => $product['imagePath'],
                'id_client' => $product['id_client']
            );
            $this->cart->insert($insert);
            redirect(base_url('index.php/product_detail'));
        } else {
            redirect(base_url('index.php/register'));
        }
    }
    function buscet()
    {
        $cart = $this->cart->contetns();
        $this->load->model('register_model');
        $data['pages'] = $this->menu_model->get_pages();
        $this->load->library('form_validation');
        $data['pages_info'] = $this->menu_model->get_pages_info('buscet');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $name = 'buscet';
        $data['error'] = '';
        if( ! empty($data['user'])) {
            $name = 'buscet';
            $this->template->page_view($data, $name);
            //$product= $this->profile_model->product_info($id);
            /*$data = array(
                'id'      => $product->id,
                'qty'     => $product->qty,
                'price'   => $product->price,
                'name'    => $product->name,
                'sum' => $product->sum,
                'id_client' => $product->client
            );
            $this->cart->insert($data);*/
            /*if($this->input->post('save')){
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
            }*/
        } else {
            redirect(base_url('index.php/register'));
        }
    }
}
