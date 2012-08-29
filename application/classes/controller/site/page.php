<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Page extends Controller_Site_Main {

    public function before()
    {
        $status = Kohana::$config->load('site.status');
        if ($status == 0) $this->request->redirect('offline');
        return parent::before();
    }

    // Вид страницы
    public function action_index()
    {
        // Если запрошен аяксом
        if ($this->request->is_ajax())
        {
            // Устанавливаем заголовки json-ответа
            $this->response->headers('Content-Type', 'application/json');

            $pagealias = $this->request->param('pagealias');

            $page = ORM::factory('page')
                ->where('alias', '=', $pagealias)
                ->and_where('status', '=', '1')
                ->find();

            $page_array['pagename'] = $page->pagename;
            $page_array['date'] = $page->date;
            $page_array['alias'] = $page->alias;
            $page_array['catalog'] = $page->catalogs->catname;
            $page_array['author'] = $page->users->username;
            $page_array['content'] = $page->content;

            echo parent::json_encode_cyr($page_array);
        }
        else
        {
            // Выбираем страницу из БД согласно алиасу
            $pagealias = $this->request->param('pagealias');

            $page = ORM::factory('page')->where('alias', '=', $pagealias)->and_where('status', '=', '1')->find();

            $pagename = $page->pagename;
            $date = $page->date;
            $text = $page->content;
            $metadesc = $page->metadesc;
            $metakeywords = $page->metakeywords;

            // Выбираем все настройки
            $cfgsite = Kohana::$config->load('site');

            foreach ($cfgsite as $key => $value)
            {
               $options[$key] = Kohana::$config->load('site.' . $key);
            }

            if ( ! empty($metadesc)) $options['description'] = $metadesc;
            if ( ! empty($metakeywords)) $options['keywords'] = $metakeywords;

            if ($options['debug'] == 1) $profiler = View::factory('profiler/stats');

            $nav = View::factory('site/blocks/V_nav');
            $footer = View::factory('site/blocks/V_footer');
            $content = View::factory('site/blocks/V_page')
                            ->bind('pagename', $pagename)
                            ->bind('date', $date)
                            ->bind('text', $text)
                            ->bind('catalog_name', $catalog_name)
                            ->bind('author', $author);

            $main = View::factory('site/index')
                            ->bind('nav', $nav)
                            ->bind('content', $content)
                            ->bind('footer',$footer)
                            ->bind('options', $options)
                            ->bind('profiler', $profiler);

            $this->response->body($main);
        }
    }
}

