<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_App {

    public function before()
    {
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

    public function action_on($model = 'user')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'user')
    {
        parent::action_off($model);
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

        $view = View::factory('admin/blocks/V_adduser')
            ->bind('roles', $roles);

        $this->response->body($view);
    }

    // Добавляем пользователя в БД
    public function action_add()
    {
        try {
            $user = ORM::factory('user');
            $user->create_user($_POST, NULL)
                 ->add('roles', ORM::factory('role', array('name' => 'login')));

            // Проверяем роль пользователя при регистрации
            if ($_POST['role_name'] !== 'login')
            {
                $user->add('roles', ORM::factory('role', array('name' => $_POST['role_name'])));
            }

            $user->save();
        }
        catch (ORM_Validation_Exception $e)
        {
            print_r($errors = $e->errors());
        }
    }


} // End Welcome
