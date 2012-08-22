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
            $pagealias = $this->request->param('pagealias');
            $page = ORM::factory('page')->where('alias', '=', $pagealias)->find_all();
            $this->response->headers('Content-Type', 'application/json');

            $page_array = array();

            foreach ($page as $field)
            {
                $page_array['pagename'] = $field->pagename;
                $page_array['date'] = $field->date;
                $page_array['alias'] = $field->alias;
                $page_array['catalog'] = $field->catalogs->catname;
                $page_array['author'] = $field->users->username;
                $page_array['content'] = $field->content;
            }

            $json_page = parent::json_encode_cyr($page_array);
            echo $json_page;

        } else {

            $pagealias = $this->request->param('pagealias');
            $viewpage = DB::query(Database::SELECT, 'SELECT * FROM pages WHERE alias = :pagealias')
                            ->bind(':pagealias', $pagealias)
                            ->execute();

            foreach ($viewpage as $page)
            {
                $pagename = $page['pagename'];
                $date = $page['date'];
                $text = $page['content'];
                $description = $page['metadesc'];
                $keywords = $page['metakeywords'];
            }

            View::bind_global('pagename', $pagename);
            View::bind_global('description', $description);
            View::bind_global('keywords', $keywords);

            // Выбираем все настройки
            $cfgsite = Kohana::$config->load('site');

            foreach ($cfgsite as $key => $value)
            {
               $options[$key] = Kohana::$config->load('site.' . $key);
            }

            if ($options['debug'] == 1) $profiler = View::factory('profiler/stats');

            $navigation = View::factory('site/blocks/V_nav');
            $footer = View::factory('site/blocks/V_footer');
            $content = View::factory('site/blocks/V_page')
                            ->bind('pagename', $pagename)
                            ->bind('date', $date)
                            ->bind('text', $text)
                            ->bind('catalog_name', $catalog_name)
                            ->bind('author', $author);

            $this->response->body(View::factory('site/index')
                            ->bind('nav', $navigation)
                            ->bind('content', $content)
                            ->bind('footer',$footer)
                            ->bind('options', $options)
                            ->bind('profiler', $profiler));
        }
    }
}

