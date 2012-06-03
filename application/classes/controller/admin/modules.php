<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_App {

    public function action_index()
    {
        echo View::factory('admin/blocks/V_modules');
    }


} // End Welcome
