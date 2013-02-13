<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Controller_Admin_App {

    // Проверка на авторизацию
    public function before()
    {
        $auth = Auth::instance();
        if ( ! $auth->logged_in('login'))
        {
            HTTP::redirect('admin/auth');
        }
        return parent::before();
    }

    // Вывод главной страницы админки
	public function action_index()
	{
        $pages = ORM::factory('Page')->order_by('date', 'DESC')->limit(10)->find_all();
        $catalogs = ORM::factory('Catalog')->order_by('date', 'DESC')->limit(10)->find_all();

        if ($this->request->is_ajax())
        {
            foreach ($pages as $page)
            {
                $pages_array['pagename'] = $page->pagename;
                $pages_array['date'] = $page->date;
                $pages_array['alias'] = $page->alias;
                $json['pages'][] = $pages_array;
            }
            foreach ($catalogs as $catalog)
            {
                $catalogs_array['catname'] = $catalog->catname;
                $catalogs_array['date'] = $catalog->date;
                $catalogs_array['alias'] = $catalog->alias;
                $json['catalogs'][] = $catalogs_array;
            }
            $this->response->body( parent::json_encode_cyr($json) );
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
	}


}
