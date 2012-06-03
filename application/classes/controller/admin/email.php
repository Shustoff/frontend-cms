<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Email extends Controller_App {

    public function action_index()
    {
        echo View::factory('admin/blocks/V_sendemail');
    }

} // End Welcome
