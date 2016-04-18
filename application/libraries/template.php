<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту');

class Template {

    function page_view($data, $name)
    {
        $CI =& get_instance();
        $CI->load->view('header', $data);
        $CI->load->view('menu_view', $data);
        $CI->load->view($name.'_view', $data);
        $CI->load->view('footer');
    }
}

?>