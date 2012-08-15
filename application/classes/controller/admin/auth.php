<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller {

    // Логинимся
    public function action_index()
    {
        $config = Kohana::$config->load('session');
        $config->set('database.lifetime', 100000);
        echo $config->get('database.lifetime');

        if (Auth::instance()->logged_in()) {$this->request->redirect('admin');}

        if ($_POST)
        {
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);
            if ($status)
            {
                $user = ORM::factory('user')->where('username', '=', $data['username'])->find();
                if ($user->status == 1)
                {
                    if (Auth::instance()->logged_in())
                    {
                        $this->request->redirect('admin');
                    }
                }
                else
                {
                    $faillogin = "<div class='alert alert-error'>Ваш аккаунт не активирован!</div>";
                    Auth::instance()->logout(TRUE);
                }
            }
            else
            {
                $faillogin = "<div class='alert alert-error'>Неправильный email или пароль!</div>";
                $this->response->body(View::factory('/admin/login')->bind('faillogin', $faillogin));
            }
        }

        $this->response->body(View::factory('/admin/login')->bind('faillogin', $faillogin));
    }

    // Разлогиниваемся
    public function action_logout()
    {
        Auth::instance()->logout(TRUE);
        $this->request->redirect('admin/auth');
    }

}
