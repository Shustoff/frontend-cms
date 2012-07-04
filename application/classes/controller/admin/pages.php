<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_App {

    public function before()
    {
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->pages == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        parent::action_main($model = 'page');
    }

    public function action_on($model = 'page')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'page')
    {
        parent::action_off($model);
    }

    public function action_intrash($model = 'page')
    {
        parent::action_intrash($model);
    }

    public function action_search($model = 'page', $field = 'pagename')
    {
        parent::action_search($model, $field);
    }

    public function action_addpages()
    {
        $catalogs = ORM::factory('catalog')->find_all();
        $user = Auth::instance()->get_user();
        $user_id = ORM::factory('user')->where('email', '=', $user->email)->find();
        $view = View::factory('admin/pages/V_addpage')
            ->bind('catalogs', $catalogs)
            ->bind('user_id', $user_id);
        $this->response->body($view);
    }

    public function action_add($model = 'page')
    {
        parent::action_add($model);
    }

    public function action_editpages()
    {
        $catalogs = ORM::factory('catalog')->find_all();
        $user = Auth::instance()->get_user();
        $user_id = ORM::factory('user')->where('email', '=', $user->email)->find();

        $id = $this->request->param('id');
        $page = ORM::factory('page', $id);

        $view = View::factory('admin/pages/V_editpage')
            ->bind('catalogs', $catalogs)
            ->bind('user_id', $user_id)
            ->bind('page', $page);

        $this->response->body($view);
    }

    public function action_edit($model = 'page')
    {
        parent::action_edit($model);
    }


} // End Welcome
