<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Main extends Controller {

	public function action_index()
	{





        $this->response->body(View::factory('/site/index'));
	}

} // End Welcome
