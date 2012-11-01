<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Stats extends Controller_Admin_App {

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->stats == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        $pages = ORM::factory('Page')->find_all()->count();
        $catalogs = ORM::factory('Catalog')->find_all()->count();
        $users = ORM::factory('User')->find_all()->count();
        $roles = ORM::factory('Role')->find_all()->count();
        $modules = ORM::factory('Module')->find_all()->count();
        $mails = ORM::factory('Email')->find_all()->count();
        $mostactive = DB::query(Database::SELECT, 'SELECT username FROM users WHERE logins in
                               (SELECT MAX(logins) FROM users)')->execute()->get('username');

        $allpages = DB::select('id')->from('pages')->where('intrash', '=', '1');
        $allcatalogs = DB::select('id')->union($allpages)->from('catalogs')->where('intrash', '=', '1');
        $allusers = DB::select('id')->union($allcatalogs)->from('users')->where('intrash', '=', '1');
        $trashitems = DB::select('id')->union($allusers)->from('modules')->where('intrash', '=', '1')->execute()->count();

        $view = View::factory('admin/blocks/V_stats')
                    ->set('pages', $pages)
                    ->set('catalogs', $catalogs)
                    ->set('users', $users)
                    ->set('roles', $roles)
                    ->set('modules', $modules)
                    ->set('mails', $mails)
                    ->set('trashitems', $trashitems)
                    ->set('mostactive', $mostactive);

        $this->response->body($view);
    }
}