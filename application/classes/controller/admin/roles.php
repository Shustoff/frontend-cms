<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Roles extends Controller_Admin_App {

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
        parent::action_main($model = 'role');
    }

    public function action_on($model = 'role')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'role')
    {
        parent::action_off($model);
    }

    public function action_intrash($model = 'role')
    {
        parent::action_intrash($model);
    }

    public function action_addroles()
    {
        $view = View::factory('admin/roles/V_addrole');
        $this->response->body($view);
    }

    public function action_add($model = 'role')
    {
        parent::action_add($model);
    }

    // Проверяем название роли на уникальность
    public function action_checkrole()
    {
        $unique_role  = ORM::factory('role')->unique('name', $_POST['name']);
        if ( ! $unique_role) echo 'Это название уже используется';
    }

    public function action_editroles()
    {
        $id = $this->request->param('id');
        $role = ORM::factory('role', $id);

        $view = View::factory('admin/roles/V_editrole')
                ->set('role', $role);
        $this->response->body($view);

    }

    public function action_edit($model = 'role')
    {
        parent::action_edit($model);
    }

}