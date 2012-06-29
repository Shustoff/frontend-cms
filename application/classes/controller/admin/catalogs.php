<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalogs extends Controller_App {

    public function action_index()
    {
        parent::action_main($model = 'catalog');
    }

    public function action_on($model = 'catalog')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'catalog')
    {
        parent::action_main($model);
    }

    public function action_intrash($model = 'catalog')
    {
        parent::action_intrash($model);
    }

    public function action_search($model = 'catalog', $field = 'catname')
    {
        parent::action_search($model, $field);
    }

    public function action_addcatalogs()
    {
        $catalogs = ORM::factory('catalog')->find_all();

        $view = View::factory('admin/blocks/V_addcatalog')
            ->bind('catalogs', $catalogs);

        $this->response->body($view);
    }

    public function action_add()
    {
        ORM::factory('catalog')
            ->set('catname', $_POST['catname'])
            ->set('alias', $_POST['alias'])
            ->set('catdesc', $_POST['catdesc'])
            ->set('date', $_POST['date'])
            ->set('parent_id', $_POST['parent_id'])
            ->set('status', $_POST['status'])
            ->save();
    }

} // End Welcome
