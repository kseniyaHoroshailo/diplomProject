<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail extends CI_Controller {

    function view($title)
    {
        $this->load->model('catalog_model');
        $data['pages'] = $this->menu_model->get_pages();
        $data['pages_info'] = $this->catalog_model->get_catalogs($title);
        $data['productCategory'] = $this->catalog_model->get_cat();    //вывод категорий товаров
        $name = 'product_detail';
        $this->template->page_view($data, $name);


    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */