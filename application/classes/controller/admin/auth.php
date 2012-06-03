<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller {

    // Проверяем логин и пароль
    public function action_index()
    {
        if (Auth::instance()->logged_in())
        {
            $this->request->redirect('admin');
        }
        else
        {
            if ($_POST)
            {
                $email = Arr::get($_POST, 'email', '');
                $pass = Arr::get($_POST, 'pass', '');

                if (Auth::instance()->login($email, $pass))
                {
                    $this->request->redirect('admin');
                }
                else
                {
                    $faillogin = "<div class='alert alert-error'>Неправильный email или пароль!</div>";
                }
            }
            $this->response->body(View::factory('/admin/login')->bind('faillogin', $faillogin));
        }
    }


    // Разлогиниваемся
    public function action_logout()
    {
        Auth::instance()->logout();
        $this->request->redirect('admin/auth');
    }

}
