<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Options extends Controller {

    public function action_index()
    {
        $hostname = Kohana::$config->load('database.default.connection.hostname');
        $database = Kohana::$config->load('database.default.connection.database');
        $prefix = Kohana::$config->load('database.default.table_prefix');
        $username = Kohana::$config->load('database.default.connection.username');
        $password = Kohana::$config->load('database.default.connection.password');

        $view = View::factory('admin/blocks/V_options')
                        ->set('hostname', $hostname)
                        ->set('database', $database)
                        ->set('prefix', $prefix)
                        ->set('username', $username)
                        ->set('password', $password);

        $this->response->body($view);
    }


} // End Welcome
