<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Email extends Controller_Admin_App {

    public function before()
    {
        parent::before();
        $roles = Auth::instance()->get_user()->roles->find_all();
        foreach ($roles as $role)
        {
            if ($role->name === 'login')
                $permission = FALSE;
            else
                $role->mails == 0 ? $permission = FALSE : $permission = TRUE;
        }
        if ( ! $permission) die('Вам запрещен доступ к этой странице');
    }

    public function action_index()
    {
        $users = ORM::factory('User')->find_all();

        $user = Auth::instance()->get_user();
        $usermail = $user->email;
        $author_id = ORM::factory('User')->where('email', '=', $user)->find();

        $view = View::factory('admin/blocks/V_sendemail')
                      ->bind('users', $users)
                      ->bind('author_id', $author_id)
                      ->bind('usermail', $usermail);

        $this->response->body($view);
    }


    public function action_send()
    {
        $config = Kohana::$config->load('email');
        Email::connect($config);

        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $from = Kohana::$config->load('site.email');
        $message = $_POST['content'];
        $saveemail = $_POST['saveemail'];
        $date = $_POST['date'];

        if ($saveemail == 1)
        {
            ORM::factory('Email')
                ->set('to', $to)
                ->set('subject', $subject)
                ->set('from', $from)
                ->set('message', $message)
                ->set('date', $date)
                ->save();
        }

        Email::send($to, $from, $subject, $message, $html = TRUE);
    }


}
