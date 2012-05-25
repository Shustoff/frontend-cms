<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Template {

	public function action_index()
	{
        $this->template->main = View::factory('admin/blocks/V_main');
	}

} // End Welcome
