<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_App {

    public function action_index()
    {
        echo View::factory('admin/blocks/V_pages');
    }

    public function action_addpage()
    {
        echo View::factory('admin/blocks/V_addpage');
    }





} // End Welcome
