<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Info extends Controller_Admin_App {

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->opts == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        if ($this->request->is_ajax())
        {
            $this->response->body(View::factory('admin/info'));
        }
        else
        {
            $this->response->body(View::factory('admin/index'));
        }
    }

}
