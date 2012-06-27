<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Email extends Controller_App {

    public function action_index()
    {
        $users = ORM::factory('users')->find_all();

        $email = Auth::instance()->get_user();
        $author_id = ORM::factory('users')->where('email', '=', $email)->find();

        $view = View::factory('admin/blocks/V_sendemail')
                      ->bind('users', $users)
                      ->bind('author_id', $author_id);

        $this->response->body($view);
    }


    public function action_send()
    {
        $config = Kohana::$config->load('email');
        Email::connect($config);

        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $from = $_POST['from'];
        $message = $_POST['message'];
        $saveemail = $_POST['saveemail'];
        $date = $_POST['date'];

        if ($saveemail == 1)
        {
            ORM::factory('mails')
                ->set('to', $to)
                ->set('subject', $subject)
                ->set('from', $from)
                ->set('message', $message)
                ->set('date', $date)
                ->save();
        }

        Email::send($to, $from, $subject, $message, $html = FALSE);
    }


} // End Welcome
