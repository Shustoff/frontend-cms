<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_App {

    public function action_index()
    {
        parent::action_main($table = 'users');
    }

    public function action_on($table = 'users')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'users')
    {
        parent::action_main($table);
    }

    public function action_intrash($table = 'users')
    {
        parent::action_intrash($table);
    }

    public function action_search($table = 'users', $field = 'email')
    {
        parent::action_search($table, $field);
    }

    public function action_adduser()
    {
        $roles = ORM::factory('roles')->find_all();

        $view = View::factory('admin/blocks/V_adduser')
            ->bind('roles', $roles);

        $this->response->body($view);
    }

    public function action_add()
    {
        // Хэшируем пароль
        $password = sha1($_POST['password']);

        ORM::factory('users')
            ->set('email', $_POST['email'])
            ->set('password', $password)
            ->set('firstname', $_POST['firstname'])
            ->set('lastname', $_POST['lastname'])
            ->set('datereg', $_POST['datereg'])
            ->set('role_id', $_POST['role_id'])
            ->set('status', $_POST['status'])
            ->save();
    }


} // End Welcome
