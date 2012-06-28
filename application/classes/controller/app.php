<?php defined('SYSPATH') or die('No direct script access.');
class Controller_App extends Controller {

    public function before()
    {
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            $this->request->redirect('admin/auth');
        }
        return parent::before();
    }

    // Вывод итемов
    public function action_main($table) {
        $sortby = Arr::get($_POST, 'sortby', 'id');
        $limit = Arr::get($_POST, 'limit', '5');
        $offset = Arr::get($_POST, 'offset', '0');

        $allitems = ORM::factory($table)->where('intrash', '=', '0')->find_all();

        $items = ORM::factory($table)
            ->where('intrash', '=', '0')
            ->order_by($sortby)
            ->offset($offset)
            ->limit($limit)
            ->find_all();

        $count = $allitems->count() / $limit;
        $count = ceil($count);

        if ($count <= 1) $count = NULL;

        $view = View::factory('admin/blocks/V_' . $table)
                ->bind($table, $items)
                ->bind('count', $count);

        $this->response->body($view);
    }

    // Опубликовать
    public function action_on($table)
    {
        ORM::factory($table, $_POST['idpage'])->set('status', 1)->save();
    }

    // Не опубликовать
    public function action_off($table)
    {
        ORM::factory($table, $_POST['idpage'])->set('status', 0)->save();
    }

    // В корзину
    public function action_intrash($table)
    {
        ORM::factory($table, $_POST['intrash'])->set('intrash', 1)->save();
    }

    // Поиск
    public function action_search($table, $field)
    {
        $count = NULL;
        $items = ORM::factory($table)->where($field, 'LIKE', '%'.$_POST['searchitem'].'%')->find_all();
        $view = View::factory('admin/blocks/V_' . $table)
                ->bind($table, $items)
                ->bind('count', $count);
        $this->response->body($view);
    }

}