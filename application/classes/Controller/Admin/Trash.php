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

    // Вывод всех итемов из корзины
    public function action_index()
    {
        if ($this->request->is_ajax())
        {
            $numberPage = Arr::get($_GET, 'number', '1');
            $sortby = (int) Arr::get($_GET, 'sortby', 1);
            $limit = (int) Arr::get($_GET, 'limit', 10);
            $offset = 0;

            if ($numberPage > 1) $offset = $limit * ($numberPage - 1);

            // Находим все записи которые "в корзине" для расчета пагинации
            $allpages = DB::select('id')->from('pages')->where('intrash', '=', '1');
            $allcatalogs = DB::select('id')->union($allpages)->from('catalogs')->where('intrash', '=', '1');
            $allusers = DB::select('id')->union($allcatalogs)->from('users')->where('intrash', '=', '1');
            $allroles = DB::select('id')->union($allusers)->from('roles')->where('intrash', '=', '1');
            $allitems = DB::select('id')->union($allroles)->from('modules')->where('intrash', '=', '1')->execute();

            $items = DB::query(Database::SELECT,
                    '(SELECT id as item_id, pagename as item_name, alias as item_field, date as item_date, status, intrash, "pages" tablename FROM pages
                     WHERE intrash = 1)
                        UNION
                     (SELECT id as item_id, catname as item_name, alias as item_field, date as item_date, status, intrash, "catalogs" FROM catalogs
                     WHERE intrash = 1)
                        UNION
                     (SELECT id as item_id, email as item_name, username as item_field, datereg as item_date, status, intrash, "users" FROM users
                     WHERE intrash = 1)
                        UNION
                     (SELECT id as item_id, name as item_name, name as item_field, date as item_date, status, intrash, "roles" FROM roles
                     WHERE intrash = 1)
                        UNION
                     (SELECT id as item_id, name as item_name, systemname as item_field, date as item_date, status, intrash, "modules" FROM modules
                     WHERE intrash = 1)
                         ORDER BY :sortby LIMIT :offset, :limit')
                        ->bind(':sortby', $sortby)
                        ->bind(':offset', $offset)
                        ->bind(':limit', $limit)
                        ->execute();

            // Если корзина пуста
            if ($allitems->count() == 0)
            {
                $json[]['empty'] = '<p class="center not-found alert alert-info">Корзина пуста.</p>';
            }
            else
            {
                $json[]['empty'] = '';
            }

            // Рассчитываем пагинацию
            $count = $allitems->count() / $limit;
            $count = ceil($count);
            if ($count <= 1) $count = NULL;

            foreach ($items as $item)
            {
                $arr['id'] = $item['item_id'];
                $arr['name'] = $item['item_name'];
                $arr['editfield'] = $item['item_field'];
                $arr['date'] = $item['item_date'];
                $arr['tablename'] = $item['tablename'];
                $json[] = $arr;
            }

            $json[]['count'] = $count;

            $json = self::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $this->response->body(View::factory('admin/index'));
        }
    }

    // Восстанавливаем итем из корзины
    public function action_recovery()
    {
        $json = json_decode( $this->request->body() );
        DB::update($json->tablename)->set(array('intrash' => 0))->where('id', '=', $json->id)->execute();
    }

    // Очищаем корзину полностью
    public function action_deleteall()
    {
        DB::query(Database::DELETE, 'DELETE FROM `pages` WHERE `intrash` = 1')->execute();
        DB::query(Database::DELETE, 'DELETE FROM `catalogs` WHERE `intrash` = 1')->execute();
        DB::query(Database::DELETE, 'DELETE FROM `users` WHERE `intrash` = 1')->execute();
        DB::query(Database::DELETE, 'DELETE FROM `roles` WHERE `intrash` = 1')->execute();
        DB::query(Database::DELETE, 'DELETE FROM `modules` WHERE `intrash` = 1')->execute();
    }
}