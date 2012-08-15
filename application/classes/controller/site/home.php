<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Home extends Controller_Site_Main {

    public function action_index()
   	{
       // Если запрошен аяксом
       if ($this->request->is_ajax())
       {
           // Если в настройках включен кэш
           if (ORM::factory('option', 1)->cache == 1)
           {
               // Если кэш существует
               if ( ! $pages = Cache::instance('file')->get('cache.pages'))
               {
                   $pages = ORM::factory('page')->where('status', '=', '1')->find_all()->as_array();
                   Cache::instance()->set('cache.pages', $pages, Date::MINUTE * 10);
               }
           }
           else
           {
               $pages = ORM::factory('page')->where('status', '=', '1')->find_all();
           }

           // Устанавливаем заголовки json-ответа
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

       } else {

           // Выбираем все настройки
           $options = ORM::factory('option')->find_all();

           foreach ($options as $option)
           {
               $sitename = $option->sitename;
               $description = $option->description;
               $keywords = $option->keywords;
               $robots = $option->robots;
               $copyright = $option->copyright;
               $debug = $option->debug;
           }

           $nav = View::factory('site/blocks/V_nav');
           $footer = View::factory('site/blocks/V_footer');

           if ($debug == 1) $profiler = View::factory('profiler/stats');

           $view = View::factory('site/index')
                       ->bind('sitename', $sitename)
                       ->bind('description', $description)
                       ->bind('keywords', $keywords)
                       ->bind('robots', $robots)
                       ->bind('copyright', $copyright)
                       ->bind('nav', $nav)
                       ->bind('footer', $footer)
                       ->bind('profiler', $profiler);

           $this->response->body($view);
       }
    }

    // Сайт выключен
    public function action_offline()
    {
       $status = DB::query(Database::SELECT, 'SELECT status FROM options')
           ->execute()
           ->get('status');

       if ($status != 0) $this->request->redirect();

       $this->response->body( View::factory('site/offline') );
    }
}