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

    public function action_search($table = 'catalogs', $field = 'catname')
    {
        parent::action_search($table, $field);
    }

    public function action_addcatalog()
    {
        $catalogs = ORM::factory('catalogs')->find_all();

        $view = View::factory('admin/blocks/V_addcatalog')
            ->bind('catalogs', $catalogs);

        $this->response->body($view);
    }

    public function action_add()
    {
        ORM::factory('catalogs')
            ->set('catname', $_POST['catname'])
            ->set('alias', $_POST['alias'])
            ->set('catdesc', $_POST['catdesc'])
            ->set('date', $_POST['date'])
            ->set('parent_id', $_POST['parent_id'])
            ->set('status', $_POST['status'])
            ->save();
    }

} // End Welcome
