<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_App {

    public function action_index()
    {
        parent::action_main($model = 'page');
    }

    public function action_on($model = 'page')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'page')
    {
        parent::action_main($model);
    }

    public function action_intrash($model = 'page')
    {
        parent::action_intrash($model);
    }

    public function action_search($model = 'page', $field = 'pagename')
    {
        parent::action_search($model, $field);
    }

    public function action_addpages()
    {
        $catalogs = ORM::factory('catalog')->find_all();

        $email = Auth::instance()->get_user();
        $author_id = ORM::factory('user')->where('email', '=', $email)->find();

        $view = View::factory('admin/blocks/V_addpage')
            ->bind('catalogs', $catalogs)
            ->bind('author_id', $author_id);

        $this->response->body($view);
    }

    public function action_add()
    {
        ORM::factory('page')
            ->set('pagename', $_POST['pagename'])
            ->set('alias', $_POST['alias'])
            ->set('content', $_POST['content'])
            ->set('metadesc', $_POST['metadesc'])
            ->set('metakeywords', $_POST['metakeywords'])
            ->set('date', $_POST['date'])
            ->set('catalog_id', $_POST['catalog_id'])
            ->set('author_id', $_POST['author_id'])
            ->set('status', $_POST['status'])
            ->save();
    }

} // End Welcome
