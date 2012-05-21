<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Template {

    public function before()
    {
        parent::before();

        $config = Kohana::$config->load('admin_config');
        $admintitle = $config->get('admintitle');
        $admindesc = $config->get('desc');

        View::bind_global('admintitle', $admintitle);
        View::bind_global('admindesc', $admindesc);
    }

	public function action_index()
	{
        $this->template->main = View::factory('admin/blocks/V_main');
	}

    public function action_options()
    {
        $this->template->main = View::factory('admin/blocks/V_options');
    }

    public function action_pages()
    {
        $this->template->main = View::factory('admin/blocks/V_pages');
    }

    public function action_users()
    {
        $this->template->main = View::factory('admin/blocks/V_users');
    }

    public function action_modules()
    {
        $this->template->main = View::factory('admin/blocks/V_modules');
    }

} // End Welcome
