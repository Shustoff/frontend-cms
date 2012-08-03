<?php defined('SYSPATH') or die('No direct script access.');

function json_encode_cyr($str) {
    $arr_replace_utf = array('\u0410', '\u0430','\u0411','\u0431','\u0412','\u0432',
    '\u0413','\u0433','\u0414','\u0434','\u0415','\u0435','\u0401','\u0451','\u0416',
    '\u0436','\u0417','\u0437','\u0418','\u0438','\u0419','\u0439','\u041a','\u043a',
    '\u041b','\u043b','\u041c','\u043c','\u041d','\u043d','\u041e','\u043e','\u041f',
    '\u043f','\u0420','\u0440','\u0421','\u0441','\u0422','\u0442','\u0423','\u0443',
    '\u0424','\u0444','\u0425','\u0445','\u0426','\u0446','\u0427','\u0447','\u0428',
    '\u0448','\u0429','\u0449','\u042a','\u044a','\u042d','\u044b','\u042c','\u044c',
    '\u042d','\u044d','\u042e','\u044e','\u042f','\u044f');
    $arr_replace_cyr = array('А', 'а', 'Б', 'б', 'В', 'в', 'Г', 'г', 'Д', 'д', 'Е', 'е',
    'Ё', 'ё', 'Ж','ж','З','з','И','и','Й','й','К','к','Л','л','М','м','Н','н','О','о',
    'П','п','Р','р','С','с','Т','т','У','у','Ф','ф','Х','х','Ц','ц','Ч','ч','Ш','ш',
    'Щ','щ','Ъ','ъ','Ы','ы','Ь','ь','Э','э','Ю','ю','Я','я');
    $str1 = json_encode($str);
    $str2 = str_replace($arr_replace_utf,$arr_replace_cyr,$str1);
    return $str2;
}

class Controller_Site_Catalog extends Controller {

    public function before()
    {
        $status = DB::query(Database::SELECT, 'SELECT status FROM options')->execute()->get('status');
        if ($status == 0) $this->request->redirect('offline');
        return parent::before();
    }

    public function action_index()
    {
        if ($this->request->is_ajax())
        {
            $this->response->headers('Content-Type', 'application/json');

            $aliascat = $this->request->param('catalias');
            $catalog_id = DB::query(Database::SELECT, 'SELECT id FROM catalogs WHERE alias = :aliascat')
                                ->bind(':aliascat', $aliascat)
                                ->execute()
                                ->get('id');
            $pages = ORM::factory('page')->where('catalog_id', '=', $catalog_id)->find_all();

            $pages_array = array();

            foreach ($pages as $page)
            {
                $pages_array[] = $page->as_array();
            }

            $json_pages = json_encode_cyr($pages_array);

            echo $json_pages;

            return;

        } else {

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

            $this->template->navigation = View::factory('site/blocks/V_nav');
            $this->template->footer = View::factory('site/blocks/V_footer');

            $column = 4; // Количество столбцов на главной странице
            $i = 0; // Счетчик

            $content = View::factory('site/blocks/V_catalog')
                        ->bind('pages', $pages)
                        ->bind('column', $column)
                        ->bind('i', $i);

            $this->template->content = $content;
        }
    }
}