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

            // Если страница не найдена, выдаем ошибку
            if (!$page->loaded())
            {
               throw new Kohana_HTTP_Exception_404;
            }

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

            $page = ORM::factory('page')
                ->where('alias', '=', $pagealias)
                ->and_where('status', '=', '1')
                ->find();

            // Выбираем все настройки
            foreach (Kohana::$config->load('site') as $key => $value)
            {
               $options[$key] = Kohana::$config->load('site.' . $key);
            }

            if ( ! empty($page->metadesc))
                $options['description'] = $page->metadesc;

            if ( ! empty($page->metakeywords))
                $options['keywords'] = $page->metakeywords;

            // Подключаем профайлер
            if ($options['debug'] == 1) $profiler = View::factory('profiler/stats');

            $nav = View::factory('site/blocks/V_nav');
            $footer = View::factory('site/blocks/V_footer');
            $main = View::factory('site/index')
                    ->bind('nav', $nav)
                    ->bind('footer',$footer)
                    ->bind('options', $options)
                    ->bind('profiler', $profiler);
            $this->response->body($main);
        }
    }
}

