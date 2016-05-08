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
}
