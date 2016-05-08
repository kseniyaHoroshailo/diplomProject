<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends CI_Controller {


    public function index()
    {
        // pagination
        $config['base_url'] = base_url().'index.php/catalog/index/'; // адрес где происходит построение навигации
        $config['total_rows'] = $this->db->count_all('product'); // сколько всего записей в этой таблице, откуда будем брать записи. Используем данную функцию для подсчета всех записей.
        $config['per_page'] = 9; // сколько записей показывать на странице
        $config['full_tag_open'] = '<div class="pagination-wrapper ">
            <div class="pagination pagination-lg">';  // тег открытия навигации
        $config['full_tag_close'] = '</div></div>'; // тег закрытия навигации

        $this->pagination->initialize($config); // инициализируем навигацию с нашими настройками.


        $this->load->model('catalog_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['productCategory'] = $this->catalog_model->get_cat();    //вывод категорий товаров
        $data['products'] = $this->catalog_model->get_products($config['per_page'], $this->uri->segment(3));
        $name = 'catalog';
        $data['pages_info'] = $this->menu_model->get_pages_info('catalog');
        $data['user'] = $this->session->userdata('user');
        $data['user_info']['status'] = $this->session->userdata('status');
        $data['user_info']['avatar'] = $this->session->userdata('avatar');
        $data['user_info']['firstname'] = $this->session->userdata('firstname');
        $data['user_info']['lastname'] = $this->session->userdata('lastname');
        $data['user_info']['adress'] = $this->session->userdata('adress');
        $data['user_info']['email'] = $this->session->userdata('email');
        $this->template->page_view($data, $name);

    }

    function cat($cat)
    {
        // pagination
        $config['base_url'] = base_url().'index.php/catalog/index/'; // адрес где происходит построение навигации
        $config['total_rows'] = $this->db->count_all('product'); // сколько всего записей в этой таблице, откуда будем брать записи. Используем данную функцию для подсчета всех записей.
        $config['per_page'] = 9; // сколько записей показывать на странице
        $config['full_tag_open'] = '<div class="pagination-wrapper ">
            <div class="pagination pagination-lg">';  // тег открытия навигации
        $config['full_tag_close'] = '</div></div>'; // тег закрытия навигации

        $this->pagination->initialize($config); // инициализируем навигацию с нашими настройками.

        $this->load->model('catalog_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->catalog_model->get_pages_info('catalog');
        $data['productCategory'] = $this->catalog_model->get_cat();    //вывод категорий товаров
        $data['products'] = $this->catalog_model->get_cat_products($cat);
        $name = 'catalog';
        $this->template->page_view($data, $name);


    }

}
