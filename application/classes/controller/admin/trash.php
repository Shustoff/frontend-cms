<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Trash extends Controller_App {

    public function action_index()
    {
        $sortby = Arr::get($_POST, 'sortby', 'item_id');
        $limit = Arr::get($_POST, 'limit', '5');
        $offset = Arr::get($_POST, 'offset', '0');

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
        DB::update('pages')->set(array('intrash' => 0))->where('pagename', '=', $_POST["item_name"])->execute();
        DB::update('catalogs')->set(array('intrash' => 0))->where('catname', '=', $_POST["item_name"])->execute();
        DB::update('users')->set(array('intrash' => 0))->where('email', '=', $_POST["item_name"])->execute();
        DB::update('modules')->set(array('intrash' => 0))->where('name', '=', $_POST["item_name"])->execute();
    }

    public function action_delete()
    {
        DB::delete('pages')->where('pagename', '=', $_POST["item_name"])->execute();
        DB::delete('catalogs')->where('catname', '=', $_POST["item_name"])->execute();
        DB::delete('users')->where('email', '=', $_POST["item_name"])->execute();
        DB::delete('modules')->where('name', '=', $_POST["item_name"])->execute();
    }


} // End Welcome
