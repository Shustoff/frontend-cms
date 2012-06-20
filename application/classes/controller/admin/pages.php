<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_App {

    public function action_index()
    {
        $pages = ORM::factory('pages')->where('intrash', '=', '0')->find_all();

        $view = View::factory('admin/blocks/V_pages')->set('pages', $pages);

        $this->response->body($view);
    }

    public function action_addpage()
    {
        echo View::factory('admin/blocks/V_addpage');
    }

    public function action_status()
    {
        ORM::factory('pages', 1)->set('status', 0)->save();
    }

} // End Welcome
