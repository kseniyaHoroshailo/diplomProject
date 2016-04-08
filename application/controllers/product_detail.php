<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail extends CI_Controller {


    public function index()
    {
        $this->load->view('produc_detail_view');
       // $data['products'] = $this->product_detail_model->get_products();
        //$this->load->view('produc_detail_view',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */