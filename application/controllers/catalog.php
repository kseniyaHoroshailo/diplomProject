<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends CI_Controller {


    public function index()
    {
        // pagination
        $config['base_url'] = base_url().'index.php/catalog/index/'; // адрес где происходит построение навигации
        $config['total_rows'] = $this->db->count_all('product'); // сколько всего записей в этой таблице, откуда будем брать записи. Используем данную функцию для подсчета всех записей.
        $config['per_page'] = 12; // сколько записей показывать на странице
        $config['full_tag_open'] = '<div class="pagination-wrapper ">
            <div class="pagination pagination-lg">';  // тег открытия навигации
        $config['full_tag_close'] = '</div></div>'; // тег закрытия навигации

        $this->pagination->initialize($config); // инициализируем навигацию с нашими настройками.


        $this->load->model('catalog_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['productCategory'] = $this->catalog_model->get_cat();    //вывод категорий товаров
        $data['products'] = $this->catalog_model->get_products($config['per_page'], $this->uri->segment(3));
        $name = 'catalog';
        $this->template->page_view($data, $name);

    }

    function cat($cat)
    {
        $this->load->model('catalog_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->catalog_model->get_pages_info('catalog');
        $data['productCategory'] = $this->catalog_model->get_cat();    //вывод категорий товаров
        $data['products'] = $this->catalog_model->get_cat_products($cat);
        $name = 'catalog';
        $this->template->page_view($data, $name);


    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */