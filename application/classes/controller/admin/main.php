<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Template {

    public $template = '/admin/index';
    // Проверка на авторизацию
    public function before()
    {
        $auth = Auth::instance();
        if ( ! $auth->logged_in('login'))
        {
            $this->request->redirect('admin/auth');
        }
        return parent::before();
    }


    // Вывод главной страницы админки
	public function action_index()
	{
        $user = Auth::instance()->get_user();
        View::bind_global('user', $user);

        $sitename = ORM::factory('option', 1)->sitename;
        View::bind_global('sitename', $sitename);

        $pages = ORM::factory('page')->order_by('date', 'DESC')->limit(10)->find_all();
        $catalogs = ORM::factory('catalog')->order_by('date', 'DESC')->limit(10)->find_all();

        $this->template->main = View::factory('admin/blocks/V_main')
                ->bind('pages', $pages)
                ->bind('catalogs', $catalogs);
	}


} // End Welcome
