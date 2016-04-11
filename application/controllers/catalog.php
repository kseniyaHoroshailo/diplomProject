<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends CI_Controller {


    public function index()
    {
        // pagination
        $config['base_url'] = base_url().'index.php/catalog/index/'; // адрес где происходит построение навигации
        $config['total_rows'] = $this->db->count_all('product'); // сколько всего записей в этой таблице, откуда будем брать записи. Используем данную функцию для подсчета всех записей.
        $config['per_page'] = 2; // сколько записей показывать на странице
        $config['full_tag_open'] = '<div class="pagination-wrapper ">
            <div class="pagination pagination-lg">';  // тег открытия навигации
        $config['full_tag_close'] = '</div></div>'; // тег закрытия навигации

        $this->pagination->initialize($config); // инициализируем навигацию с нашими настройками.


        $this->load->model('catalogs_model');
        $data['products'] = $this->catalogs_model->get_products($config['per_page'], $this->uri->segment(3));
        $this->load->view('catalogs_view',$data);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */