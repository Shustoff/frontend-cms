<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Rss extends Controller_App {

    public function action_index()
    {
        $view = View::factory('admin/blocks/V_addrss');
        $this->response->body($view);
    }

    public function action_addrss()
    {
        $pages = ORM::factory('pages')->find_all();

        $info = array('title' => 'rss подписка на страницы');

        $all = array();

        foreach($pages as $page) {
            array_push($all, array(
                'title' => $page->pagename,
                'description' => $page->content,
                'pubDate' => $page->date
            ));
        }

        echo Feed::create($info, $all);

    }
} // End Welcome
