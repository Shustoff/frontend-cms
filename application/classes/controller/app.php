<?php defined('SYSPATH') or die('No direct script access.');
abstract class Controller_App extends Controller {
    public function before()
    {
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            $this->request->redirect('admin/auth');
        }
        return parent::before();
    }

    public function action_index() {}

    public function action_on() {}

    public function action_off() {}

    public function action_intrash() {}

}