<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin_App {

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
        parent::action_main($model = 'user');
    }

    public function action_on($table = 'users')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'users')
    {
        parent::action_off($table);
    }

    public function action_intrash($model = 'user')
    {
        parent::action_intrash($model);
    }

    public function action_search($model = 'user', $field = 'email')
    {
        parent::action_search($model, $field);
    }

    // Грузим вид добавления пользователя
    public function action_addusers()
    {
        $roles = ORM::factory('role')->find_all();
        $view = View::factory('admin/users/V_adduser')
            ->bind('roles', $roles);
        $this->response->body($view);
    }

    // Добавляем пользователя в БД
    public function action_add($model = 'user')
    {
        try
        {
            $user = ORM::factory('user');
            $unique_email = $user->unique('email', $_POST['email']);
            if ($unique_email === true)
            {
                $user->create_user($_POST, NULL)->add('roles', ORM::factory('role', array('name' => 'login')));
                // Проверяем роль пользователя при регистрации
                if ($_POST['role_name'] !== 'login')
                {
                    $user->add('roles', ORM::factory('role', array('name' => $_POST['role_name'])));
                }
                $user->save();
            }
            else
            {
                echo 'Этот email уже занят';
            }
        } catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('auth');
            foreach ($errors as $error)
            {
                echo $error . '<br>';
            }
        }
    }

    // Проверяем логин  на уникальность
    public function action_checklogin()
    {
        $unique_username  = ORM::factory('user')->unique('username', $_POST['username']);
        if ( ! $unique_username) echo 'Этот логин уже занят';
    }

    // Проверяем емейл на уникальность
    public function action_checkemail()
    {
        $unique_email  = ORM::factory('user')->unique('email', $_POST['email']);
        if ( ! $unique_email) echo 'Этот email уже занят';
    }

    // Грузим вид редактирования пользователя
    public function action_editusers()
    {
        $roles = ORM::factory('role')->find_all();

        $id = $this->request->param('id');
        $user = ORM::factory('user', $id);

        foreach($user->roles->find_all() as $role)
        {
            if ($role->name !== 'login') $userrole = $role->name;
        }

        $view = View::factory('admin/users/V_edituser')
            ->bind('roles', $roles)
            ->bind('user', $user)
            ->bind('userrole', $userrole);

        $this->response->body($view);
    }

    // Обновляем пользователя в БД
    public function action_edit($model = 'user')
    {
        try
        {
            DB::delete('roles_users')
                ->where('user_id', '=', $_POST['id'])
                ->and_where('role_id', '!=', '1')
                ->execute();

            $user = ORM::factory('user', $_POST['id']);
            $user->update_user($_POST, NULL);
            // Проверяем роль пользователя при регистрации
            if ($_POST['role_name'] !== 'login')
            {
                $user->add('roles', ORM::factory('role', array('name' => $_POST['role_name'])));
            }
            $user->save();
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('auth');
            foreach ($errors as $error)
            {
                echo $error . '<br>';
            }
        }
    }


} // End Admin_Users
