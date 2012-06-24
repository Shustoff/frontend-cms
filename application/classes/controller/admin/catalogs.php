<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalogs extends Controller_App {

    public function action_index()
    {
        parent::action_main($table = 'catalogs');
    }

    public function action_on($table = 'catalogs')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'catalogs')
    {
        parent::action_main($table);
    }

    public function action_intrash($table = 'catalogs')
    {
        parent::action_intrash($table);
    }

    public function action_addcatalog()
    {
        echo View::factory('admin/blocks/V_addcatalog');
    }

} // End Welcome
