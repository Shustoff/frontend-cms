<?php defined('SYSPATH') or die('No direct script access.');
class Controller_App extends Controller {
    public function before()
    {
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            $this->request->redirect('admin/auth');
        }
        return parent::before();
    }
}
