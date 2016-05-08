<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rules_model extends CI_Model
{

    public $msg_rules = array
    (
        array
        (
            'field' => 'username',
            'label' => 'Имя',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),
        array
        (
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required|xss_clean|min_length[6]|max_length[50]|valid_email'
        ),
        array
        (
            'field' => 'message',
            'label' => 'Сообщение',
            'rules' => 'required|xss_clean|min_length[1]|max_length[2000]|alpha_dash'
        ),
    );

    public $reg_rules = array
    (
        array
        (
            'field' => 'username',
            'label' => 'Логин',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),
        array
        (
            'field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required|xss_clean|min_length[6]|max_length[50]|valid_email'
        ),
        array
            (
                'field' => 'password',
                'label' => 'Пароль',
                'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
            ),
        array
            (
                'field' => 'password2',
                'label' => 'Повторите пароль',
                'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
            )
    );

    public $login_rules = array
    (
        array
        (
            'field' => 'username',
            'label' => 'Логин',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        ),
        array
        (
            'field' => 'password',
            'label' => 'Пароль',
            'rules' => 'required|xss_clean|min_length[6]|max_length[16]|alpha_dash'
        )
    );
}
