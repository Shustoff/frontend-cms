<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_App {

    private static $model = 'User';
    private static $table = 'users';
    private static $field = 'username';

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

    public function action_on($table = 'users')
    {
        parent::action_on(self::$table);
    }

    public function action_off($table = 'users')
    {
        parent::action_off(self::$table);
    }

    public function action_intrash($table = 'users')
    {
        parent::action_intrash(self::$table);
    }

    public function action_search()
    {
        parent::action_main(self::$model, self::$field);
    }

    // Грузим вид добавления пользователя
    public function action_adduser()
    {
        if ($this->request->is_ajax())
        {
            $roles = ORM::factory('Role')->where('status', '=', '1')->find_all();

            foreach ($roles as $role)
            {
                $roles_array['name'] = $role->name;
                $roles_array['description'] = $role->description;
                $json_result[] = $roles_array;
            }

            $json['roles'] = $json_result;

            $json = parent::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Добавляем пользователя в БД
    public function action_add($model = 'User')
    {
        $json = json_decode( $this->request->body() );
        $json = (array) $json;

        $user = ORM::factory(self::$model);
        $unique_email = $user->unique('email', $json['email']);
        $unique_username = $user->unique('username', $json['username']);

        if ($unique_email && $unique_username)
        {
            $user->create_user($json, NULL)->add('roles', ORM::factory('Role', array('name' => 'login')));
            if ($json['rolename'] !== 'login')
            {
                $user->add('roles', ORM::factory('Role', array('name' => $json['rolename'])));
            }
            $added = $user->save();
            $this->response->body($added);
        }

        if ( ! $unique_email) echo 'Этот емейл уже занят. ';
        if ( ! $unique_username) echo 'Этот логин уже занят. ';
    }

    // Грузим вид редактирования пользователя
    public function action_edititem()
    {
        if ($this->request->is_ajax())
        {
            $username = $this->request->param('alias');
            $roles = ORM::factory('Role')->where('status', '=', '1')->find_all();
            $user = ORM::factory(self::$model)->where('username', '=', $username)->find();

            foreach ($user->roles->find_all() as $role)
            {
                $userrole = 'login';
                if ($role->name !== 'login') $userrole = $role->name;
            }

            foreach ($roles as $role)
            {
                $roles_array['name'] = $role->name;
                $roles_array['description'] = $role->description;
                $json_result[] = $roles_array;
            }

            $json['roles'] = $json_result;
            $json['user'] = $user->as_array();
            $json['rolename'] = $userrole;

            $json = parent::json_encode_cyr( $json );
            $this->response->body( $json );
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Обновляем пользователя в БД
    public function action_save($model = 'User')
    {
        $json = json_decode( $this->request->body() );
        $json = (array) $json;

        DB::delete('roles_users')->where('user_id', '=', $json['id'])->and_where('role_id', '!=', '1')->execute();

        $user = ORM::factory(self::$model, $json['id']);
        $user->update_user($json, NULL);

        if ($json['rolename'] !== 'login')
        {
            $user->add('roles', ORM::factory('Role', array('name' => $json['rolename'])));
        }

        $saved = $user->save();
        $this->response->body($saved);
    }

    // Проверяем логин  на уникальность
    public function action_checklogin()
    {
        $username = Arr::get($_POST, 'username');
        $unique_username  = ORM::factory('User')->unique('username', $username);
        if ( ! $unique_username) echo 'Этот логин уже занят';
    }

    // Проверяем емейл на уникальность
    public function action_checkemail()
    {
        $email = Arr::get($_POST, 'email');
        $unique_email  = ORM::factory('User')->unique('email', $email);
        if ( ! $unique_email) echo 'Этот email уже занят';
    }

    // Удаляем материал
    public function action_delete($table = 'users') {
        parent::action_delete(self::$table);
    }

}
