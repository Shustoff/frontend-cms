<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_Admin_App {

    public function before()
    {
        parent::before();
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
        parent::action_main($model = 'Module');
    }

    public function action_on($table = 'modules')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'modules')
    {
        parent::action_off($table);
    }

    public function action_search($model = 'Module', $field = 'name')
    {
        parent::action_search($model, $field);
    }

    public function action_intrash($model = 'Module')
    {
        parent::action_intrash($model);
    }

    public function action_addmodules()
    {
        $user = Auth::instance()->get_user();
        $author_id = ORM::factory('User')->where('email', '=', $user->email)->find();

        $view = View::factory('admin/modules/V_addmodule')
                ->bind('author_id', $author_id);

        $this->response->body($view);
    }

    public function action_add($model = 'Module')
    {
        parent::action_add($model);
    }

    public function action_editmodules()
    {
        $user = Auth::instance()->get_user();
        $author_id = ORM::factory('User')->where('email', '=', $user->email)->find();

        $id = $this->request->param('id');
        $module = ORM::factory('Module', $id);

        $view = View::factory('admin/modules/V_editmodule')
                ->bind('author_id', $author_id)
                ->bind('module', $module);

        $this->response->body($view);
    }

    public function action_edit($model = 'Module')
    {
        parent::action_edit($model);
    }

    // проверяем название модуля на уникальность
    public function action_checkmodname()
    {
        $unique_modname  = ORM::factory('Module')->unique('name', $_POST['name']);
        if ( ! $unique_modname) echo 'Такой модуль уже существует';
    }

    // проверяем системное имя модуля на уникальность
    public function action_checksysname()
    {
        $unique_sysname  = ORM::factory('Module')->unique('systemname', $_POST['systemname']);
        if ( ! $unique_sysname) echo 'Это системное имя уже используется';
    }
}
