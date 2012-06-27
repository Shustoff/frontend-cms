<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Modules extends Controller_App {

    public function action_index()
    {
        parent::action_main($table = 'modules');
    }

    public function action_on($table = 'modules')
    {
        parent::action_on($table);
    }

    public function action_off($table = 'modules')
    {
        parent::action_main($table);
    }

    public function action_search($table = 'modules', $field = 'name')
    {
        parent::action_search($table, $field);
    }

    public function action_intrash($table = 'modules')
    {
        parent::action_intrash($table);
    }

    public function action_addmodules()
    {
        $email = Auth::instance()->get_user();
        $author_id = ORM::factory('users')->where('email', '=', $email)->find();

        $view = View::factory('admin/blocks/V_addmodule')
                ->bind('author_id', $author_id);

        $this->response->body($view);
    }

    public function action_add()
    {
        ORM::factory('modules')
            ->set('name', $_POST['name'])
            ->set('systemname', $_POST['systemname'])
            ->set('content', $_POST['content'])
            ->set('user_id', $_POST['user_id'])
            ->set('type', $_POST['type'])
            ->set('date', $_POST['date'])
            ->set('status', $_POST['status'])
            ->save();
    }

} // End Welcome
