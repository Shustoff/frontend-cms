<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Rss extends Controller_App {

    // Создаем RSS-поток из таблицы
    public function action_index()
    {
        $pages = ORM::factory('page')->find_all();

        $info = array('title' => 'RSS подписка на страницы');

        $all = array();

        foreach($pages as $page) {
            array_push($all, array(
                'title' => $page->pagename,
                'description' => $page->content,
                'pubDate' => $page->date,
                'link' => '/page'
            ));
        }

        $feed = Feed::create($info, $all);
        $this->response->body($feed);
    }

}
