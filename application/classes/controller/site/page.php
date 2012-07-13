<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Page extends Controller_Template {

    public $template = '/site/index';

    public function action_index()
    {
        $alias = $this->request->param('alias');
        $page = ORM::factory('page')->where('alias', '=', $alias)->find_all();
        foreach ($page as $pagefield)
        {
            $pagename = $pagefield['pagename'];
        }

        $this->template->pagename = $pagename;
    }
}