<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin_App {

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
            {
                $permission = FALSE;
            }
            else
            {
                $role->opts == 0 ? $permission = FALSE : $permission = TRUE;
            }
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        // Загружаем настройки БД
        $cfg = Kohana::$config;
        $db['hostname'] = $cfg->load('database.default.connection.hostname');
        $db['database'] = $cfg->load('database.default.connection.database');
        $db['prefix'] = $cfg->load('database.default.table_prefix');
        $db['username'] = $cfg->load('database.default.connection.username');
        $db['password'] = $cfg->load('database.default.connection.password');

        // Загружаем настройки сайта
        $cfgsite = $cfg->load('site');

        foreach ($cfgsite as $key => $value)
        {
            $settings[$key] = $cfg->load('site.' . $key);
        }

        if ($this->request->is_ajax())
        {
            $main_result = array_merge($settings, $db);
            $this->response->body( parent::json_encode_cyr($main_result) );
        }
        else
        {
            $view = View::factory('admin/index');
            $this->response->body($view);
        }
    }

    // Сохраняем настройки
    public function action_save($model = 'Option')
    {
        $settings = json_decode( $this->request->body() );
        foreach ($settings as $key => $value)
        {
            $saved = Kohana::$config->_write_config('site', $key, $value);
        }
        $this->response->body(parent::json_encode_cyr($saved));
    }
}
