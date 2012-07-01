<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Admin_Options extends Controller_App {

    public function before()
    {
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->opts === 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        $hostname = Kohana::$config->load('database.default.connection.hostname');
        $database = Kohana::$config->load('database.default.connection.database');
        $prefix = Kohana::$config->load('database.default.table_prefix');
        $username = Kohana::$config->load('database.default.connection.username');
        $password = Kohana::$config->load('database.default.connection.password');

        $options = ORM::factory('option')->find_all();

        $view = View::factory('admin/blocks/V_options')
                        ->set('hostname', $hostname)
                        ->set('database', $database)
                        ->set('prefix', $prefix)
                        ->set('username', $username)
                        ->set('password', $password)
                        ->set('options', $options);

        $this->response->body($view);
    }

    public function action_save()
    {
        ORM::factory('option', 1)->values($_POST)->save();
    }



}
