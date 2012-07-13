<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Main extends Controller_Template {

    public $template = '/site/index';

	public function action_index()
	{
        $options = DB::query(Database::SELECT, 'SELECT * FROM options')->execute();

        foreach ($options as $option)
        {
            $sitename = $option['sitename'];
            $description = $option['description'];
            $keywords = $option['keywords'];
            $status = $option['status'];
            $robots = $option['robots'];
            $copyright = $option['copyright'];
        }

        if ($status == 0) $this->request->redirect('offline');

        $this->template->sitename = $sitename;
        $this->template->description = $description;
        $this->template->keywords = $keywords;
        $this->template->robots = $robots;
        $this->template->copyright = $copyright;

        // Выводим главную страницу
        $pages = DB::query(Database::SELECT, 'SELECT * FROM pages')->execute();

        $column = 4; // Количество столбцов
        $i = 0; // Счетчик

        $content = View::factory('site/blocks/mainpage')
                    ->bind('pages', $pages)
                    ->bind('column', $column)
                    ->bind('i', $i);

        $this->template->content = $content;

    }
    // Сайт выключен
    public function action_offline()
    {
        $status = DB::query(Database::SELECT, 'SELECT status FROM options')->execute()->as_array();
        $status = $status['0']['status'];
        if ($status != 0) $this->request->redirect();
        $this->template = View::factory('site/offline');
    }

    // Вид страницы
    public function action_viewpage()
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
        }

        View::set_global('copyright', 'Все права защищены');
        View::set_global('robots', 'index,follow');
        View::bind_global('sitename', $pagename);
        View::bind_global('description', $description);
        View::bind_global('keywords', $keywords);

        $content = View::factory('site/blocks/page')
                        ->bind('pagename', $pagename)
                        ->bind('date', $date)
                        ->bind('text', $text);;

        $this->template->content = $content;
    }
}