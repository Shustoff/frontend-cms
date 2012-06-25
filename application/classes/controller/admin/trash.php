<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Trash extends Controller_App {

    public function action_index()
    {
        isset($_POST['sortby']) ? $sortby =  $_POST['sortby'] : $sortby = 'item_id';
        isset($_POST['limit']) ? $limit = $_POST['limit'] : $limit = '5';
        isset($_POST['offset']) ? $offset = $_POST['offset'] : $offset = '0';

        // Находим все записи которые "не в корзине"
        $allpages = DB::select('id')->from('pages')->where('intrash', '=', '1');
        $allcatalogs = DB::select('id')->union($allpages)->from('catalogs')->where('intrash', '=', '1');
        $allusers = DB::select('id')->union($allcatalogs)->from('users')->where('intrash', '=', '1');
        $allitems = DB::select('id')->union($allusers)->from('modules')->where('intrash', '=', '1')->execute();

        // Расчитываем пагинацию
        $count = $allitems->count() / $limit;
        $count = ceil($count);
        if ($count <= 1) $count = NULL;

        $pages = DB::select(array('id', 'item_id'),array('pagename', 'item_name'),array('date', 'item_date'),'status','intrash')
                    ->from('pages')
                    ->where('intrash', '=', '1')
                    ->order_by($sortby)
                    ->offset($offset)
                    ->limit($limit);

        $catalogs = DB::select(array('id', 'item_id'),array('catname', 'item_name'),array('date', 'item_date'),'status','intrash')
                    ->union($pages)
                    ->from('catalogs')
                    ->where('intrash', '=', '1');

        $users = DB::select(array('id', 'item_id'),array('email', 'item_name'),array('datereg', 'item_date'),'status','intrash')
                    ->union($catalogs)
                    ->from('users')
                    ->where('intrash', '=', '1');

        $items = DB::select(array('id', 'item_id'),array('name', 'item_name'),array('date', 'item_date'),'status','intrash')
                    ->union($users)
                    ->from('modules')
                    ->where('intrash', '=', '1')
                    ->execute();

        $view = View::factory('admin/blocks/V_trash')
                ->bind('items', $items)
                ->bind('count', $count);

        $this->response->body($view);
    }

    public function action_recovery()
    {
        ORM::factory('catalogs', '*')->where('catname', '=', $_POST["item_name"])->set('intrash', 0)->save();
        ORM::factory('pages', '*')->where('pagename', '=', $_POST["item_name"])->set('intrash', 0)->save();
    }

    public function action_delete()
    {

    }


} // End Welcome
