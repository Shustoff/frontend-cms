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
        }

        $this->template->sitename = $sitename;
        $this->template->description = $description;
        $this->template->keywords = $keywords;
	}

}
