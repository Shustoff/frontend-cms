<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Template {

    public $template = '/admin/index';

	public function action_index()
	{
        $main = View::factory('/admin/blocks/main');
        $this->template->main = $main;
	}

    public function action_options()
    {
        $options = View::factory('/admin/blocks/options');
        $this->template->main = $options;
    }

    public function action_pages()
    {
        $pages = View::factory('/admin/blocks/pages');
        $this->template->main = $pages;
    }

    public function action_users()
    {
        $users = View::factory('/admin/blocks/users');
        $this->template->main = $users;
    }

    public function action_modules()
    {
        $modules = View::factory('/admin/blocks/modules');
        $this->template->main = $modules;
    }

} // End Welcome
