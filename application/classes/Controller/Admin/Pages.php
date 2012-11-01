<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Pages extends Controller_Admin_App {

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
        parent::action_main($model = 'Page');
    }

    public function action_on($table = 'pages')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'pages')
    {
        parent::action_off($table);
    }

    public function action_intrash($model = 'Page')
    {
        parent::action_intrash($model);
    }

    public function action_search($model = 'Page', $field = 'pagename')
    {
        parent::action_search($model, $field);
    }

    // Загружаем вид добавления каталога
    public function action_addpages()
    {
        $catalogs = ORM::factory('Catalog')->find_all();
        $user = Auth::instance()->get_user();
        $user_id = ORM::factory('User')->where('email', '=', $user->email)->find();
        $view = View::factory('admin/pages/V_addpage')
            ->bind('catalogs', $catalogs)
            ->bind('user_id', $user_id);
        $this->response->body($view);
    }

    public function action_add($model = 'Page')
    {
        parent::action_add($model);
    }

    // Загружаем вид редактирования каталога
    public function action_editpages()
    {
        $catalogs = ORM::factory('Catalog')->find_all();
        $user = Auth::instance()->get_user();
        $user_id = ORM::factory('User')->where('email', '=', $user->email)->find();

        $id = $this->request->param('id');
        $page = ORM::factory('Page', $id);

        $view = View::factory('admin/pages/V_editpage')
            ->bind('catalogs', $catalogs)
            ->bind('user_id', $user_id)
            ->bind('page', $page);

        $this->response->body($view);
    }

    public function action_edit($model = 'Page')
    {
        parent::action_edit($model);
    }

    // Проверка уникальности заголовка страницы
    public function action_checkpagename()
    {
        $unique_pagename  = ORM::factory('Page')->unique('pagename', $_POST['pagename']);
        if ( ! $unique_pagename) echo 'Такая страница уже существует';
    }

    // Проверка уникальность алиаса страницы
    public function action_checkalias()
    {
        $unique_alias  = ORM::factory('Page')->unique('alias', $_POST['alias']);
        if ( ! $unique_alias) echo 'Такой алиас уже существует';
    }

    // Обработка загруженного изображения
    public function action_upload()
    {
        $uploaddir = 'assets/img/site/big/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {

            Image::factory($uploadfile, 'Imagick')->resize(530, 530, Image::NONE)->save($uploadfile, 95);

            $thumbnail = 'assets/img/site/small/'.basename($_FILES['image']['name']);

            Image::factory($uploadfile, 'Imagick')
                ->resize(250, 250, Image::NONE)
                ->save($thumbnail, 80);

            echo basename($_FILES['image']['name']);

        } else {
          // WARNING! DO NOT USE "FALSE" STRING AS A RESPONSE!
          // Otherwise onSubmit event will not be fired
          echo "error";
        }
    }
}
