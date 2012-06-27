<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Roles extends Controller_App {

    public function action_addroles()
    {
        $view = View::factory('admin/blocks/V_addrole');
        $this->response->body($view);
    }

    public function action_add()
    {
        ORM::factory('roles')
            ->set('rolename', $_POST['rolename'])
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