<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Auth extends Controller {

    // Логинимся
    public function action_index()
    {
        if (Auth::instance()->logged_in()) {$this->request->redirect('admin');}

        if ($_POST)
        {
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));
            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);

            if ($status)
            {
                if(Auth::instance()->logged_in('admin')) {
                    $this->request->redirect('admin');
                }

                $this->request->redirect('admin');
            }
            else
            {
                $faillogin = "<div class='alert alert-error'>Неправильный email или пароль!</div>";
            }
        }

        $this->response->body(View::factory('/admin/login')->bind('faillogin', $faillogin));
    }

    // Разлогиниваемся
    public function action_logout()
    {
        Auth::instance()->logout();
        $this->request->redirect('admin/auth');
    }

}
