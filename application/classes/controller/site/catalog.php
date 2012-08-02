<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Catalog extends Controller_Site_Main {

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

        $options = DB::query(Database::SELECT, 'SELECT * FROM options')->execute();

        foreach ($options as $option)
        {
            $sitename = $option['sitename'];
            $description = $option['description'];
            $keywords = $option['keywords'];
            $robots = $option['robots'];
            $copyright = $option['copyright'];
        }

        View::set_global('copyright', $copyright);
        View::set_global('robots', $robots);
        View::bind_global('sitename', $sitename);
        View::bind_global('description', $description);
        View::bind_global('keywords', $keywords);

        $column = 4; // Количество столбцов на главной странице
        $i = 0; // Счетчик

        $content = View::factory('site/blocks/V_catalog')
                    ->bind('pages', $pages)
                    ->bind('column', $column)
                    ->bind('i', $i);

        $navigation = View::factory('site/blocks/V_nav');

        $footer = View::factory('site/blocks/V_footer');

        $this->template->navigation = $navigation;
        $this->template->content = $content;
        $this->template->footer = $footer;
    }
}