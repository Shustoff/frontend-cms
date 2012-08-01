<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Main extends Controller_Template {

    public $template = '/site/index';

	public function action_index()
	{
        $options = DB::query(Database::SELECT, 'SELECT * FROM options')->execute();

        foreach ($options as $option)
        {
            $this->template->sitename = $option['sitename'];
            $this->template->description = $option['description'];
            $this->template->keywords = $option['keywords'];
            $this->template->robots = $option['robots'];
            $this->template->copyright = $option['copyright'];
            $status = $option['status'];
        }

        if ($status == 0) $this->request->redirect('offline');

        // Выводим главную страницу
        $pages = ORM::factory('page')->find_all();

        $column = 4; // Количество столбцов на главной странице
        $i = 0; // Счетчик

        $content = View::factory('site/blocks/V_mainpage')
                    ->bind('pages', $pages)
                    ->bind('column', $column)
                    ->bind('i', $i);

        $navigation = View::factory('site/blocks/V_nav');

        $footer = View::factory('site/blocks/V_footer');

        $this->template->navigation = $navigation;
        $this->template->content = $content;
        $this->template->footer = $footer;

    }
    // Сайт выключен
    public function action_offline()
    {
        $status = DB::query(Database::SELECT, 'SELECT status FROM options')->execute()->get('status');
        if ($status != 0) $this->request->redirect();
        $this->template = View::factory('site/offline');
    }
}