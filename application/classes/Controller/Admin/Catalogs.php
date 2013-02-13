<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Catalogs extends Controller_Admin_App {

    private static $model = 'Catalog';
    private static $table = 'catalogs';
    private static $field = 'catname';

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
        parent::action_main(self::$model, self::$field);
    }

    public function action_on($table = 'catalogs')
    {
        parent::action_on(self::$table);
    }

    public function action_off($table = 'catalogs')
    {
        parent::action_off(self::$table);
    }

    public function action_intrash($table = 'catalogs')
    {
        parent::action_intrash(self::$table);
    }

    public function action_search()
    {
        parent::action_main(self::$model, self::$field);
    }

    // Загружаем вид добавления каталога
    public function action_addcatalog()
    {
        if ($this->request->is_ajax())
        {
            $catalogs = ORM::factory(self::$model)->find_all();

            foreach ($catalogs as $catalog)
            {
                $catalogs_array['id'] = $catalog->id;
                $catalogs_array['catname'] = $catalog->catname;
                $json_result[] = $catalogs_array;
            }

            $json['catalogs'] = $json_result;

            $json = parent::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    public function action_add($model = 'Catalog')
    {
        parent::action_add(self::$model);
    }

    // Загружаем вид редактирования каталога
    public function action_edititem()
    {
        if ($this->request->is_ajax())
        {
            $catalogs = ORM::factory(self::$model)->find_all();

            $alias = $this->request->param('alias');
            $cat = ORM::factory(self::$model)->where('alias', '=', $alias)->find()->as_array();

            foreach ($catalogs as $catalog)
            {
                $catalogs_array['id'] = $catalog->id;
                $catalogs_array['catname'] = $catalog->catname;
                $json_result[] = $catalogs_array;
            }

            $json['catalogs'] = $json_result;
            $json['catalog'] = $cat;

            $json = parent::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    public function action_save($model = 'Catalog')
    {
        parent::action_save(self::$model);
    }

    // Проверка уникальности названия каталога
    public function action_checkcatname()
    {
        $catname = Arr::get($_POST, 'catname');
        $unique_catname  = ORM::factory(self::$model)->unique('catname', $catname);
        if ( ! $unique_catname) echo 'Такой каталог уже существует';
    }

    // Проверка уникальности алиаса каталога
    public function action_checkalias()
    {
        $alias = Arr::get($_POST, 'alias');
        $unique_alias  = ORM::factory(self::$model)->unique('alias', $alias);
        if ( ! $unique_alias) echo 'Такой алиас уже существует';
    }

    // Удаляем материал
    public function action_delete($table = 'catalogs') {
        parent::action_delete(self::$table);
    }
}