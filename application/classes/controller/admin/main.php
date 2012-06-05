<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Template {

    public $template = '/admin/index';
    // Проверка на авторизацию
    public function before()
    {
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            $this->request->redirect('admin/auth');
        }
        return parent::before();
    }


    // Вывод главной страницы админки
	public function action_index()
	{
        $email = Auth::instance()->get_user();
        View::bind_global('email', $email);

        $sitename = ORM::factory('options', 1)->sitename;
        View::bind_global('sitename', $sitename);

        $this->template->main = View::factory('admin/blocks/V_main');
	}

} // End Welcome
