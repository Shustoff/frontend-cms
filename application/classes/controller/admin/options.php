<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Options extends Controller_App {

    public function action_index()
    {
        $hostname = Kohana::$config->load('database.default.connection.hostname');
        $database = Kohana::$config->load('database.default.connection.database');
        $prefix = Kohana::$config->load('database.default.table_prefix');
        $username = Kohana::$config->load('database.default.connection.username');
        $password = Kohana::$config->load('database.default.connection.password');

        $options = ORM::factory('options')->find_all();

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
        ORM::factory('options', 1)->values($_POST)->save();
    }



}
