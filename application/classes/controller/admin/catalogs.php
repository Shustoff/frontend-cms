<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalogs extends Controller_App {

    public function action_index()
    {
        isset($_POST['sortby']) ? $sortby =  $_POST['sortby'] : $sortby = 'id';
        isset($_POST['limit']) ? $limit = $_POST['limit'] : $limit = '5';
        isset($_POST['offset']) ? $offset = $_POST['offset'] : $offset = '0';

        $allitems = ORM::factory('catalogs')->where('intrash', '=', '0')->find_all();

        $catalogs = ORM::factory('catalogs')
            ->where('intrash', '=', '0')
            ->order_by($sortby)
            ->offset($offset)
            ->limit($limit)
            ->find_all();

        $count = $allitems->count() / $limit;
        $count = ceil($count);

        if ($count <= 1) $count = NULL;

        $view = View::factory('admin/blocks/V_catalogs')
                ->bind('catalogs', $catalogs)
                ->bind('count', $count);

        $this->response->body($view);
    }

    public function action_on()
    {
        ORM::factory('catalogs', $_POST['idpage'])->set('status', 1)->save();
    }

    public function action_off()
    {
        ORM::factory('catalogs', $_POST['idpage'])->set('status', 0)->save();
    }

    public function action_intrash()
    {
        ORM::factory('catalogs', $_POST['intrash'])->set('intrash', 1)->save();
    }

    public function action_addcatalog()
    {
        echo View::factory('admin/blocks/V_addcatalog');
    }

} // End Welcome
