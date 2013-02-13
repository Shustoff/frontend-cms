<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller {

    // Логинимся
    public function action_index()
    {
        if (Auth::instance()->logged_in()) {
            HTTP::redirect('admin');
        }

        if ($_POST)
        {
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);
            if ($status)
            {
                $user = ORM::factory('User')->where('username', '=', $data['username'])->find();
                if ($user->status == 1)
                {
                    if (Auth::instance()->logged_in())
                    {
                        HTTP::redirect('admin');
                    }
                }
                else
                {
                    $faillogin = "<div class='alert alert-error'>Вам запрещен доступ в систему!</div>";
                    Auth::instance()->logout(TRUE);
                }
            }
            else
            {
                $faillogin = "<div class='alert alert-error'>Неправильный логин или пароль!</div>";
                $this->response->body(View::factory('admin/login')->bind('faillogin', $faillogin));
            }
        }

        $this->response->body(View::factory('admin/login')->bind('faillogin', $faillogin));
    }

    // Разлогиниваемся
    public function action_logout()
    {
        Auth::instance()->logout(TRUE);
        HTTP::redirect('admin/auth');
    }

}
