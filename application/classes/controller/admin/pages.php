<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_App {

    public function action_index()
    {
        parent::action_main($table = 'pages');
    }

    public function action_on($table = 'pages')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'pages')
    {
        parent::action_main($table);
    }

    public function action_intrash($table = 'pages')
    {
        parent::action_intrash($table);
    }

    public function action_addpage()
    {
        echo View::factory('admin/blocks/V_addpage');
    }


} // End Welcome
