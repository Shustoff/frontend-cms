<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_App {

    public function before()
    {
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->mods == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        parent::action_main($model = 'module');
    }

    public function action_on($model = 'module')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'module')
    {
        parent::action_off($model);
    }

    public function action_search($model = 'module', $field = 'name')
    {
        parent::action_search($model, $field);
    }

    public function action_intrash($model = 'module')
    {
        parent::action_intrash($model);
    }

    public function action_addmodules()
    {
        $user = Auth::instance()->get_user();
        $author_id = ORM::factory('user')->where('email', '=', $user->email)->find();

        $view = View::factory('admin/modules/V_addmodule')
                ->bind('author_id', $author_id);

        $this->response->body($view);
    }

    public function action_add($model = 'module')
    {
        parent::action_add($model);
    }

    public function action_editmodules()
    {
        $user = Auth::instance()->get_user();
        $author_id = ORM::factory('user')->where('email', '=', $user->email)->find();

        $id = $this->request->param('id');
        $module = ORM::factory('module', $id);

        $view = View::factory('admin/modules/V_editmodule')
                ->bind('author_id', $author_id)
                ->bind('module', $module);

        $this->response->body($view);
    }

    public function action_edit($model = 'module')
    {
        parent::action_edit($model);
    }

} // End Welcome
