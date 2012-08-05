<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Catalog extends Controller {

    public function before()
    {
        $status = DB::query(Database::SELECT, 'SELECT status FROM options')->execute()->get('status');
        if ($status == 0) $this->request->redirect('offline');
        return parent::before();
    }

    public function action_index()
    {
        $aliascat = $this->request->param('catalias');

        $catalog_id = DB::query(Database::SELECT, 'SELECT id FROM catalogs WHERE alias = :aliascat')
                            ->bind(':aliascat', $aliascat)
                            ->execute()
                            ->get('id');

        $pages = ORM::factory('page')->where('catalog_id', '=', $catalog_id)->find_all();

        if ($this->request->is_ajax())
        {
            $this->response->headers('Content-Type', 'application/json');

            $pages_array = array();

            foreach ($pages as $page)
            {
                $pages_array[] = $page->as_array();
            }

            $json_pages = json_encode_cyr($pages_array);
            echo $json_pages;
            return;
        }
/*            else
        {

            $options = DB::query(Database::SELECT, 'SELECT * FROM options')->execute();

            foreach ($options as $option)
            {
                $sitename = $option['sitename'];
                $description = $option['description'];
                $keywords = $option['keywords'];
                $robots = $option['robots'];
                $copyright = $option['copyright'];
            }

            View::bind_global('copyright', $copyright);
            View::bind_global('robots', $robots);
            View::bind_global('sitename', $sitename);
            View::bind_global('description', $description);
            View::bind_global('keywords', $keywords);

            $navigation = View::factory('site/blocks/V_nav');
            $footer = View::factory('site/blocks/V_footer');

            $column = 4; // Количество столбцов на главной странице
            $i = 0; // Счетчик

            $content = View::factory('site/blocks/V_catalog')
                        ->bind('pages', $pages)
                        ->bind('column', $column)
                        ->bind('i', $i);

            $this->response->body($navigation);
            $this->response->body($content);
            $this->response->body($footer);

        }*/
    }
}