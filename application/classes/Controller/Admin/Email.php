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

        if ($this->request->is_ajax())
        {
            foreach ($users as $user)
            {
                $arr[]['email'] = $user->email;
            }
            $json['users'] = $arr;
            $json['useremail'] = $usermail;

            $json = parent::json_encode_cyr($json);
            $this->response->body($json);
        }
        else
        {
            $this->response->body( View::factory('admin/index') );
        }
    }


    public function action_send()
    {
        $config = Kohana::$config->load('email');
        Email::connect($config);

        $from = Kohana::$config->load('site.email');

        $json = json_decode($this->request->body());

        if ($json->isSaveEmail == 1)
        {
            ORM::factory('Email')
                ->set('to', $json->to)
                ->set('subject', $json->subject)
                ->set('from', $from)
                ->set('message', $json->message)
                ->set('date', $json->date)
                ->save();
        }

        Email::send($json->to, $from,  $json->subject, $json->message, $html = TRUE);
    }
}