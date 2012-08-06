<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Home extends Controller_Site_Main {

    public function action_index()
   	{
       if ($this->request->is_ajax())
       {
           $pages = ORM::factory('page')->find_all();
           $this->response->headers('Content-Type', 'application/json');
           $pages_array = array();


           foreach ($pages as $page)
           {
               $pages_array['pagename'] = $page->pagename;
               $pages_array['date'] = $page->date;
               $pages_array['alias'] = $page->alias;
               $pages_array['catalog'] = $page->catalogs->catname;
               $pages_array['content'] = $page->content;
               $pages_array['author'] = $page->users->username;
               $pages_result[] = $pages_array;
           }

           $json_pages = parent::json_encode_cyr($pages_result);
           echo $json_pages;
           return;

       } else {

           $options = DB::query(Database::SELECT, 'SELECT * FROM options')->execute();

           foreach ($options as $option)
           {
               $sitename = $option['sitename'];
               $description = $option['description'];
               $keywords = $option['keywords'];
               $robots = $option['robots'];
               $copyright = $option['copyright'];
           }

           View::bind_global('sitename', $sitename);
           View::bind_global('description', $description);
           View::bind_global('keywords', $keywords);
           View::bind_global('robots', $robots);
           View::bind_global('copyright', $copyright);

           $view = View::factory('site/index')
                       ->bind('sitename', $sitename)
                       ->bind('description', $description)
                       ->bind('keywords', $keywords)
                       ->bind('robots', $robots)
                       ->bind('copyright', $copyright);

           $this->response->body($view);
       }
    }

    // Сайт выключен
    public function action_offline()
    {
       $status = DB::query(Database::SELECT, 'SELECT status FROM options')->execute()->get('status');
       if ($status != 0) $this->request->redirect();
       $this->response->body( View::factory('site/offline') );
    }


}