<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {


    public function index()
    {
       $data['pages'] = $this->mainMenu_model->get_pages;
       $this->pageslibrary->page_view($data);
    }
}
