<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Trash extends Controller_Admin_App {

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->trash == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        $sortby = Arr::get($_POST, 'sortby', 'item_id');
        $limit = (int) Arr::get($_POST, 'limit', 5);
        $offset = (int) Arr::get($_POST, 'offset', 0);

        // Находим все записи которые "в корзине"
        $allpages = DB::select('id')->from('pages')->where('intrash', '=', '1');
        $allcatalogs = DB::select('id')->union($allpages)->from('catalogs')->where('intrash', '=', '1');
        $allusers = DB::select('id')->union($allcatalogs)->from('users')->where('intrash', '=', '1');
        $allroles = DB::select('id')->union($allusers)->from('roles')->where('intrash', '=', '1');
        $allitems = DB::select('id')->union($allroles)->from('modules')->where('intrash', '=', '1')->execute();

        $items = DB::query(Database::SELECT,
                'SELECT id as item_id, pagename as item_name, date as item_date, status, intrash, "pages" tablename FROM pages
                 WHERE intrash = 1
                    UNION ALL
                 SELECT id as item_id, catname as item_name, date as item_date, status, intrash, "catalogs" FROM catalogs
                 WHERE intrash = 1
                    UNION ALL
                 SELECT id as item_id, email as item_name, datereg as item_date, status, intrash, "users" FROM users
                 WHERE intrash = 1
                    UNION ALL
                 SELECT id as item_id, name as item_name, date as item_date, status, intrash, "roles" FROM roles
                 WHERE intrash = 1
                    UNION ALL
                 SELECT id as item_id, name as item_name, date as item_date, status, intrash, "modules" FROM modules
                 WHERE intrash = 1 ORDER BY :sortby LIMIT :limit OFFSET :offset')
         ->bind(':sortby', $sortby)
         ->bind(':offset', $offset)
         ->bind(':limit', $limit)
         ->execute();

        // Если корзина пуста
        if ($items->count() == 0)
        {
            $failsearch = '<p class="center not-found alert alert-info">Корзина пуста.</p>';
        }

        // Рассчитываем пагинацию
        $count = $allitems->count() / $limit;
        $count = ceil($count);
        if ($count <= 1) $count = NULL;

        $view = View::factory('admin/blocks/V_trash')
                              ->bind('items', $items)
                              ->bind('count', $count)
                              ->bind('failsearch', $failsearch);

        $this->response->body($view);
    }

    public function action_recovery()
    {
        DB::update($_POST['tablename'])->set(array('intrash' => 0))->where('id', '=', $_POST["item_id"])->execute();
    }

    public function action_delete()
    {
        DB::delete($_POST['tablename'])->where('id', '=', $_POST["item_id"])->execute();
    }
}