<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Home extends Controller_App {

    public function action_index()
   	{
       $pages = ORM::factory('page')->order_by('date', 'DESC')->limit(10)->find_all();
       $catalogs = ORM::factory('catalog')->order_by('date', 'DESC')->limit(10)->find_all();
       $view = View::factory('admin/blocks/V_main')
                      ->bind('pages', $pages)
                      ->bind('catalogs', $catalogs);
       $this->response->body($view);
   	}

} // End Welcome
