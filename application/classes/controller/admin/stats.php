<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Stats extends Controller_App {

    public function action_index()
    {
        $pages = ORM::factory('page')->find_all()->count();
        $catalogs = ORM::factory('catalog')->find_all()->count();
        $users = ORM::factory('user')->find_all()->count();
        $modules = ORM::factory('module')->find_all()->count();
        $mails = ORM::factory('email')->find_all()->count();

        $allpages = DB::select('id')->from('pages')->where('intrash', '=', '1');
        $allcatalogs = DB::select('id')->union($allpages)->from('catalogs')->where('intrash', '=', '1');
        $allusers = DB::select('id')->union($allcatalogs)->from('users')->where('intrash', '=', '1');
        $trashitems = DB::select('id')->union($allusers)->from('modules')->where('intrash', '=', '1')->execute()->count();

        $view = View::factory('admin/blocks/V_stats')
                    ->set('pages', $pages)
                    ->set('catalogs', $catalogs)
                    ->set('users', $users)
                    ->set('modules', $modules)
                    ->set('mails', $mails)
                    ->set('trashitems', $trashitems);

        $this->response->body($view);
    }


}
