<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_App {

    public function action_index()
    {
        parent::action_main($table = 'modules');
    }

    public function action_on($table = 'modules')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'modules')
    {
        parent::action_main($table);
    }

    public function action_search($table = 'modules', $field = 'name')
    {
        parent::action_search($table, $field);
    }

    public function action_intrash($table = 'modules')
    {
        parent::action_intrash($table);
    }

} // End Welcome
