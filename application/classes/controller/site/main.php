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
            $robots = $option['robots'];
            $status = $option['status'];
            $copyright = $option['copyright'];
        }

        if ($status == 0) $this->request->redirect('offline');

        $this->template->sitename = $sitename;
        $this->template->description = $description;
        $this->template->keywords = $keywords;
        $this->template->robots = $robots;
        $this->template->copyright = $copyright;

        // ID главной страницы
        $mainpageid = '10';

        // Выводим главную страницу
        $mainpage = DB::query(Database::SELECT, 'SELECT * FROM pages WHERE id =' . $mainpageid)->execute();
        foreach ($mainpage as $main)
        {
            $content = $main['content'];

        }
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
}