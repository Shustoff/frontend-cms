<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Roles extends Controller_App {

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

    public function action_addroles()
    {
        $view = View::factory('admin/blocks/V_addrole');
        $this->response->body($view);
    }

    public function action_add()
    {
        ORM::factory('role')
            ->set('name', $_POST['name'])
            ->set('description', $_POST['description'])
            ->set('pages', $_POST['pages'])
            ->set('cats', $_POST['cats'])
            ->set('users', $_POST['users'])
            ->set('mods', $_POST['mods'])
            ->set('mails', $_POST['mails'])
            ->set('stats', $_POST['stats'])
            ->set('opts', $_POST['opts'])
            ->save();
    }
}