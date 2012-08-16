<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Options extends Controller_Admin_App {

    public function before()
    {
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
            $options[$key] = $cfg->load('site.' . $key);
        }

        $view = View::factory('admin/blocks/V_options')->set('db', $db)->set('options', $options);

        $this->response->body($view);
    }

    // Сохраняем настройки
    public function action_save()
    {
        $data = Arr::extract($_POST, array('sitename', 'description', 'session', 'keywords', 'robots', 'email', 'email_from', 'copyright', 'page404', 'status', 'debug', 'cache'));
        foreach ($data as $key => $value)
        {
            Kohana::$config->_write_config('site', $key, $value);
        }
    }
}
