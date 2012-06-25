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

    public function action_adduser()
    {
        echo View::factory('admin/blocks/V_adduser');
    }



} // End Welcome
