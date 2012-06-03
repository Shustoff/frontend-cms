<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_App {

    public function action_index()
    {
        echo View::factory('admin/blocks/V_users');
    }

    public function action_adduser()
    {
        echo View::factory('admin/blocks/V_adduser');
    }



} // End Welcome
