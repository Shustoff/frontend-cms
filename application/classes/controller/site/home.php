<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Home extends Controller_Site_Main {

    public function action_index()
   	{
       if ($this->request->is_ajax())
       {
           $pages = ORM::factory('page')->find_all();
           $this->response->headers('Content-Type', 'application/json');
           $pages_array = array();
           foreach ($pages as $page)
           {
               $pages_array[] = $page->as_array();
           }
           $json_pages = parent::json_encode_cyr($pages_array);
           echo $json_pages;
           return;

       } else {
           $this->response->body(View::factory('site/index'));
       }
    }

    // Сайт выключен
    public function action_offline()
    {
       $status = DB::query(Database::SELECT, 'SELECT status FROM options')->execute()->get('status');
       if ($status != 0) $this->request->redirect();
       $this->response->body( View::factory('site/offline') );
    }


}