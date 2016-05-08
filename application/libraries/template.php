<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту');

class Template {

    function page_view($data, $name)
    {
        $CI =& get_instance();
        $CI->load->view('header', $data);
        if(empty($data['user'])) {
            $CI->load->view('pre_menu1_view');
        } else {
            $CI->load->view('pre_menu2_view');
        }
        $CI->load->view('menu_view', $data);
        $CI->load->view($name.'_view', $data);
        $CI->load->view('footer');
    }
}

?>