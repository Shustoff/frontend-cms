<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Page extends Controller_Site_Main {

    // Вид страницы
    public function action_index()
    {
        $alias = $this->request->param('alias');
        $viewpage = ORM::factory('page')->where('alias', '=', $alias)->find_all();

        foreach ($viewpage as $page)
        {
            $pagename = $page->pagename;
            $date = $page->date;
            $text = $page->content;
            $description = $page->metadesc;
            $keywords = $page->metakeywords;
            $catalog_id = $page->catalog_id;
        }

        $catalog = DB::query(Database::SELECT, 'SELECT catname FROM catalogs WHERE id = ' . $catalog_id)->execute()->as_array();

        View::set_global('copyright', 'Все права защищены');
        View::set_global('robots', 'index,follow');
        View::bind_global('sitename', $pagename);
        View::bind_global('description', $description);
        View::bind_global('keywords', $keywords);

        $content = View::factory('site/blocks/page')
                    ->bind('pagename', $pagename)
                    ->bind('date', $date)
                    ->bind('text', $text)
                    ->bind('catalog', $catalog);

        $navigation = View::factory('site/blocks/nav');

        $footer = View::factory('site/blocks/footer');

        $this->template->navigation = $navigation;
        $this->template->content = $content;
        $this->template->footer = $footer;

    }

}

