<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalogs extends Controller {

    public function action_index()
    {
        echo View::factory('admin/blocks/V_catalogs');
    }

    public function action_addcatalog()
    {
        echo View::factory('admin/blocks/V_addcatalog');
    }

} // End Welcome
