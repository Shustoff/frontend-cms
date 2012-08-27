<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Error extends Controller_Template {
 
    public $template;
 
    public function before()
    {
        parent::before();
 
        // Получаем статус ошибки
        $status = (int) $this->request->action();
 
        // Назначаем шаблон      
        $this->template = View::factory('site/404');
 
        // Получаем сообщение об ошибке
        if (Request::$initial !== Request::$current)
        {
            $message = rawurldecode($this->request->param('message'));
 
            if ($message)
            {
                $this->template->message = $message;
            }
        }
        else
        {
            $this->request->action(404);
        }
        $this->response->status($status);
    }
 
 
    public function action_404()
    {
        $this->template->fail = Kohana::$config->load('site.page404');
    }
 
    public function action_503()
    {
        $this->template->fail = 'Сервис временно не доступен';
    }

    public function action_500()
    {
        $this->template->fail = 'Internal Server Error';
    }

}