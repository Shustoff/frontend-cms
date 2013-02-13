<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin_App {

    private static $model = 'Page';
    private static $table = 'pages';
    private static $field = 'pagename';

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->pages == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        parent::action_main(self::$model, self::$field);
    }

    public function action_on($table = 'pages')
    {
        parent::action_on(self::$table);
    }

    public function action_off($table = 'pages')
    {
        parent::action_off(self::$table);
    }

    public function action_intrash($table = 'pages')
    {
        parent::action_intrash(self::$table);
    }

    public function action_search()
    {
        parent::action_main(self::$model, self::$field);
    }

    // Загружаем вид добавления страницы
    public function action_addpage()
    {
        if ($this->request->is_ajax())
        {
            $catalogs = ORM::factory('Catalog')->find_all();

            $user = Auth::instance()->get_user();
            $user = ORM::factory('User')->where('email', '=', $user->email)->find();

            foreach ($catalogs as $catalog)
            {
                $catalogs_array['id'] = $catalog->id;
                $catalogs_array['catname'] = $catalog->catname;
                $json_result[] = $catalogs_array;
            }

            $json['catalogs'] = $json_result;
            $json['userId'] = $user->id;

            $json = parent::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Добавляем страницу
    public function action_add($model = 'Page')
    {
        parent::action_add(self::$model);
    }

    // Загружаем вид редактирования страницы
    public function action_edititem()
    {
        if ($this->request->is_ajax())
        {
            $catalogs = ORM::factory('Catalog')->find_all();

            $user = Auth::instance()->get_user();
            $user = ORM::factory('User')->where('email', '=', $user->email)->find();

            $alias = $this->request->param('alias');
            $page = ORM::factory('Page')->where('alias', '=', $alias)->find()->as_array();

            foreach ($catalogs as $catalog)
            {
                $catalogs_array['id'] = $catalog->id;
                $catalogs_array['catname'] = $catalog->catname;
                $json_result[] = $catalogs_array;
            }

            $json['catalogs'] = $json_result;
            $json['userId'] = $user->id;
            $json['page'] = $page;

            $json = parent::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Сохраняем страницу
    public function action_save($model = 'Page')
    {
        parent::action_save(self::$model);
    }

    // Проверка уникальности заголовка страницы
    public function action_checkpagename()
    {
        $pagename = Arr::get($_POST, 'pagename');
        $unique_pagename  = ORM::factory('Page')->unique('pagename', $pagename);
        if ( ! $unique_pagename) echo 'Такая страница уже существует';
    }

    // Проверка уникальность алиаса страницы
    public function action_checkalias()
    {
        $alias = Arr::get($_POST, 'alias');
        $unique_alias  = ORM::factory('Page')->unique('alias', $alias);
        if ( ! $unique_alias) echo 'Такой алиас уже существует';
    }

    // Обработка загруженного изображения
    public function action_upload()
    {
        $uploaddir = 'frontend/img/site/big/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {

            Image_Imagick::factory($uploadfile)->resize(530, 530, Image_Imagick::NONE)->save($uploadfile, 95);

            $thumbnail = 'frontend/img/site/small/'.basename($_FILES['image'][ 'name']);

            Image_Imagick::factory($uploadfile)
                ->resize(250, 250, Image_Imagick::NONE)
                ->save($thumbnail, 80);

            echo basename($_FILES['image']['name']);

        } else {
          // WARNING! DO NOT USE "FALSE" STRING AS A RESPONSE!
          // Otherwise onSubmit event will not be fired
          echo "error";
        }
    }

    // Удаляем материал
    public function action_delete($table = 'pages') {
        parent::action_delete(self::$table);
    }
}
