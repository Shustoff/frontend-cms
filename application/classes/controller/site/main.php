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
        }

        if ($status == 0)
        {
            $this->request->redirect('offline');
        }

        $this->template->sitename = $sitename;
        $this->template->description = $description;
        $this->template->keywords = $keywords;
        $this->template->robots = $robots;
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