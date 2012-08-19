<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalogs extends Controller_Admin_App {

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->cats == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        parent::action_main($model = 'catalog');
    }

    public function action_on($model = 'catalog')
    {
        parent::action_on($model);
    }

    public function action_off($model = 'catalog')
    {
        parent::action_off($model);
    }

    public function action_intrash($model = 'catalog')
    {
        parent::action_intrash($model);
    }

    public function action_search($model = 'catalog', $field = 'catname')
    {
        parent::action_search($model, $field);
    }

    // Загружаем вид добавления каталога
    public function action_addcatalogs()
    {
        $catalogs = ORM::factory('catalog')->find_all();

        $view = View::factory('admin/catalogs/V_addcatalog')
            ->bind('catalogs', $catalogs);

        $this->response->body($view);
    }

    public function action_add($model = 'catalog')
    {
        parent::action_add($model);
    }

    // Загружаем вид редактирования каталога
    public function action_editcatalogs()
    {
        $catalogs = ORM::factory('catalog')->find_all();

        $id = $this->request->param('id');
        $catalog = ORM::factory('catalog', $id);

        $view = View::factory('admin/catalogs/V_editcatalog')
            ->bind('catalogs', $catalogs)
            ->bind('catalog', $catalog);

        $this->response->body($view);
    }

    public function action_edit($model = 'catalog')
    {
        parent::action_edit($model);
    }

    // Проверка уникальности названия каталога
    public function action_checkcatname()
    {
        $unique_catname  = ORM::factory('catalog')->unique('catname', $_POST['catname']);
        if ( ! $unique_catname) echo 'Такой каталог уже существует';
    }

    // Проверка уникальности алиаса каталога
    public function action_checkalias()
    {
        $unique_alias  = ORM::factory('catalog')->unique('alias', $_POST['alias']);
        if ( ! $unique_alias) echo 'Такой алиас уже существует';
    }
}