<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_App extends Controller {

    public function before()
    {
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            echo "<script>window.location = '".URL::base()."admin/auth';</script><p class='center'>Сессия устарела!</p>";
            exit;
        }
        return parent::before();
    }

    // Вывод всех материалов
    public function action_main($model) {
        $sortby = Arr::get($_POST, 'sortby', 'id');
        $limit = Arr::get($_POST, 'limit', '10');
        $offset = Arr::get($_POST, 'offset', '0');

        $allitems = ORM::factory($model)->where('intrash', '=', '0')->find_all();

        $items = ORM::factory($model)
            ->where('intrash', '=', '0')
            ->order_by($sortby)
            ->offset($offset)
            ->limit($limit)
            ->find_all();

        $count = $allitems->count() / $limit;
        $count = ceil($count);

        if ($count <= 1) $count = NULL;

        $model = strtolower($model);

        $view = View::factory('admin/'. $model . 's/V_' . $model . 's')
                ->bind($model . 's', $items)
                ->bind('count', $count)
                ->bind('failsearch', $failsearch);

        $this->response->body($view);
    }

    // Опубликовать
    public function action_on($table)
    {
        DB::update($table)->set(array('status' => 1))->where('id', '=', $_POST["id"])->execute();
    }

    // Не опубликовать
    public function action_off($table)
    {
        DB::update($table)->set(array('status' => 0))->where('id', '=', $_POST["id"])->execute();
    }

    // В корзину
    public function action_intrash($model)
    {
        ORM::factory($model, $_POST['id'])->set('intrash', 1)->save();
    }

    // Поиск
    public function action_search($model, $field)
    {
        $count = NULL;
        $items = ORM::factory($model)->where($field, 'LIKE', '%'.$_POST['searchitem'].'%')->find_all();

        if ($items->count() == 0)
        {
            $failsearch = '<p class="center not-found alert alert-info">По вашему запросу ничего не найдено.</p>';
        }

        $view = View::factory('admin/' . $model  . 's/V_' . $model . 's')
                ->bind($model . 's', $items)
                ->bind('count', $count)
                ->bind('failsearch', $failsearch);

        $this->response->body($view);
    }

    // Добавить материал
    public function action_add($model)
    {
        // Проверка валидации
        try
        {
            $added = ORM::factory($model)->values($_POST)->save();
            echo $added->id;
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('validation');
            foreach ($errors as $error)
            {
                echo $error . '<br>';
            }
        }
    }

    // Отредактировать материал
    public function action_edit($model)
    {
        // Проверка валидации
        try
        {
            ORM::factory($model, $_POST['id'])->values($_POST)->save();
        }
        catch (ORM_Validation_Exception $e)
        {
            $errors = $e->errors('validation');
            foreach ($errors as $error)
            {
                echo $error . '<br>';
            }
        }
    }
}