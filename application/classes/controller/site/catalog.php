<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Catalog extends Controller_Site_Main {

    public function before()
    {
        $status = Kohana::$config->load('site.status');
        if ($status == 0) $this->request->redirect('offline');
        return parent::before();
    }

    public function action_index()
    {
       // Если запрошен аяксом
       if ($this->request->is_ajax())
       {
           // Устанавливаем заголовки json-ответа
           $this->response->headers('Content-Type', 'application/json');

           $catalias = $this->request->param('catalias');

           $catalog = ORM::factory('catalog')
               ->where('alias', '=', $catalias)
               ->and_where('status', '=', '1')
               ->find();

           // Если каталог не найден, выдаем ошибку
           if (!$catalog->loaded())
           {
               throw new Kohana_HTTP_Exception_404;
           }

           $catalog_id = $catalog->id;
           $catalog_desc = $catalog->content;

           // Выбираем все страницы родительского каталога
           $pages = ORM::factory('page')
               ->where('catalog_id', '=', $catalog_id)
               ->and_where('status', '=', '1')
               ->find_all();

           foreach ($pages as $page)
           {
               $pages_array['pagename'] = $page->pagename;
               $pages_array['date'] = $page->date;
               $pages_array['alias'] = $page->alias;
               $pages_array['catalog_alias'] = $page->catalogs->alias;
               $pages_array['catalog'] = $page->catalogs->catname;
               $pages_array['content'] = $page->content;
               $pages_array['author'] = $page->users->username;
               $pages_result[] = $pages_array;
           };

           $pages_result[] = (array) $catalog_desc;
           echo parent::json_encode_cyr($pages_result);
       }
       else
       {
           // Выбираем все настройки
           $cfgsite = Kohana::$config->load('site');

           foreach ($cfgsite as $key => $value) {
               $options[$key] = Kohana::$config->load('site.' . $key);
           }

           if ($options['debug'] == 1) $profiler = View::factory('profiler/stats');

           $nav = View::factory('site/blocks/V_nav');
           $footer = View::factory('site/blocks/V_footer');
           $view = View::factory('site/index')
                       ->bind('options', $options)
                       ->bind('nav', $nav)
                       ->bind('footer', $footer)
                       ->bind('profiler', $profiler);

           $this->response->body($view);
       }
    }
}