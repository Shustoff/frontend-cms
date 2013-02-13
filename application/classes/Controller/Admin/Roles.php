<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Roles extends Controller_Admin_App {

    private static $model = 'Role';
    private static $table = 'roles';
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
                $role->users == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        parent::action_main(self::$model, self::$field);
    }

    public function action_on($table = 'roles')
    {
        parent::action_on(self::$table);
    }

    public function action_off($table = 'roles')
    {
        parent::action_off(self::$table);
    }

    public function action_intrash($table = 'roles')
    {
        parent::action_intrash(self::$table);
    }

    // Грузим вид добавления роли
    public function action_addrole()
    {
        if ( ! $this->request->is_ajax())
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Добавляем роль в БД
    public function action_add($model = 'Role')
    {
        try
        {
            $json = json_decode( $this->request->body() );
            $unique_role  = ORM::factory(self::$model)->unique('name', $json->name);
            if ($unique_role) {
                ORM::factory($model)->values( (array)$json )->save();
            } else {
                echo 'Это название роли уже существует.';
            }
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('validation');
            foreach ($errors as $error)
            {
                echo $error . '<br>';
            }
        }
    }

    // Грузим вид редактирования пользователя
    public function action_edititem()
    {
        if ($this->request->is_ajax())
        {
            $name = $this->request->param('alias');
            $role = ORM::factory(self::$model)->where('name', '=', $name)->find()->as_array();

            $json = parent::json_encode_cyr( $role );
            $this->response->body( $json );
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Обновляем пользователя
    public function action_save($model = 'Role')
    {
        parent::action_save(self::$model);
    }

    // Проверяем название роли на уникальность
    public function action_checkrole()
    {
        $name = Arr::get($_POST, 'name');
        $unique_role  = ORM::factory('Role')->unique('name', $name);
        if ( ! $unique_role) echo 'Это название уже используется';
    }

    // Удаляем материал
    public function action_delete($table = 'roles') {
        parent::action_delete(self::$table);
    }
}