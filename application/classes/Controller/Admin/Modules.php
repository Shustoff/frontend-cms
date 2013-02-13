<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_Admin_App {

    private static $model = 'Module';
    private static $table = 'modules';
    private static $field = 'name';

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
        parent::action_main(self::$model, self::$field);
    }

    public function action_on($table = 'modules')
    {
        parent::action_on(self::$table);
    }

    public function action_off($table = 'modules')
    {
        parent::action_off(self::$table);
    }

    public function action_search()
    {
        parent::action_main(self::$model, self::$field);
    }

    public function action_intrash($table = 'modules')
    {
        parent::action_intrash(self::$table);
    }

    // Загружаем вид добавления модуля
    public function action_addmodule()
    {
        if ( ! $this->request->is_ajax())
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
        else
        {
            $user = Auth::instance()->get_user();
            $user = ORM::factory('User')->where('email', '=', $user->email)->find();
            $json['author_id'] = $user->id;
            $this->response->body( json_encode( $json ) );
        }
    }

    public function action_add($model = 'Module')
    {
        parent::action_add(self::$model);
    }

    // Загружаем вид редактирования модуля
    public function action_edititem()
    {
        if ($this->request->is_ajax())
        {
            $sysname = $this->request->param('alias');
            $cat = ORM::factory(self::$model)->where('systemname', '=', $sysname)->find()->as_array();
            $json['module'] = $cat;

            $json = parent::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    public function action_save($model = 'Module')
    {
        parent::action_save(self::$model);
    }

    // проверяем название модуля на уникальность
    public function action_checkmodname()
    {
        $modname = Arr::get($_POST, 'modname');
        $unique_modname  = ORM::factory('Module')->unique('name', $modname);
        if ( ! $unique_modname) echo 'Такой модуль уже существует';
    }

    // проверяем системное имя модуля на уникальность
    public function action_checksysname()
    {
        $sysname = Arr::get($_POST, 'sysname');
        $unique_sysname  = ORM::factory('Module')->unique('systemname', $sysname);
        if ( ! $unique_sysname) echo 'Это системное имя уже используется';
    }

    // Удаляем материал
    public function action_delete($table = 'modules') {
        parent::action_delete(self::$table);
    }
}
