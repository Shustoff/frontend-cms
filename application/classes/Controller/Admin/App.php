<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_App extends Controller {

    // Функция кодирования в JSON кириллических символов
    static public function json_encode_cyr($str)
    {
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
        $str2 = str_replace($arr_replace_utf, $arr_replace_cyr, $str1);
        return $str2;
    }

    public function before()
    {
        $auth = Auth::instance();
        if (!$auth->logged_in())
        {
            echo "<script>window.location = '".URL::base()."admin/auth';</script><p class='center'>Сессия устарела. Войдите заново!</p>";
            exit;
        }

        $user = $auth->get_user();
        View::bind_global('user', $user);

        $sitename = Kohana::$config->load('site.sitename');
        View::bind_global('sitename', $sitename);

        return parent::before();
    }

    // Вывод всех материалов + поиск
    public function action_main($model, $field) {
        $itemname = Arr::get($_GET, 'itemname', '');
        $numberPage = Arr::get($_GET, 'number', '1');
        $sortby = Arr::get($_GET, 'sortby', 'id');
        $limit = Arr::get($_GET, 'limit', '10');
        $offset = '0';

        if ($numberPage > 1) $offset = $limit * ($numberPage - 1);

        if ($itemname)
        {
            $items = ORM::factory($model)
                ->where('intrash', '=', '0')
                ->and_where($field,  'LIKE', '%'.$itemname.'%')
                ->order_by($sortby)
                ->offset($offset)
                ->limit($limit)
                ->find_all();

            $count = ORM::factory($model)
                ->where('intrash', '=', '0')
                ->and_where($field, 'LIKE', '%'.$itemname.'%')
                ->find_all()
                ->count();

            if ( ! $count)
            {
                $json[]['notfound'] = '<p class="center not-found alert alert-info">По вашему запросу ничего не найдено.</p>';
            }
            else
            {
                $json[]['notfound'] = '';
            }
        }
        else
        {
            $items = ORM::factory($model)->where('intrash', '=', '0')->order_by($sortby)->offset($offset)->limit($limit)->find_all();
            $count = ORM::factory($model)->where('intrash', '=', '0')->find_all()->count();
            $json[]['notfound'] = '';
        }

        // Считаем общее количество страниц для пагинации
        $count = $count / $limit;
        $count = ceil($count);
        if ($count <= 1) $count = NULL;

        if ($this->request->is_ajax())
        {
            switch ($model)
            {
                case 'Page':
                    foreach ($items as $item)
                    {
                        $arr['id'] = $item->id;
                        $arr['alias'] = $item->alias;
                        $arr['pagename'] = $item->pagename;
                        $arr['catname'] = $item->catalogs->catname ? $item->catalogs->catname : 'нету';
                        $arr['author'] = $item->users->username;
                        $arr['date'] = $item->date;
                        $arr['status'] = $item->status;
                        $json[] = $arr;
                    }
                    break;
                case 'Catalog':
                    foreach ($items as $item)
                    {
                        $arr['id'] = $item->id;
                        $arr['alias'] = $item->alias;
                        $arr['catname'] = $item->catname;
                        $arr['parentCatName'] = $item->catalogs->catname;
                        $arr['date'] = $item->date;
                        $arr['status'] = $item->status;
                        $json[] = $arr;
                    }
                    break;
                case 'Module':
                    foreach ($items as $item)
                    {
                        $arr['id'] = $item->id;
                        $arr['name'] = $item->name;
                        $arr['systemname'] = $item->systemname;
                        $arr['author'] = $item->users->username;
                        $arr['date'] = $item->date;
                        $arr['status'] = $item->status;
                        $json[] = $arr;
                    }
                    break;
                case 'User':
                    foreach ($items as $item)
                    {
                        $arr['id'] = $item->id;
                        $arr['email'] = $item->email;
                        $arr['username'] = $item->username;

                        foreach ($item->roles->find_all() as $role)
                        {
                            $arr['rolename'] = 'Зарегистрированный';
                            if ($role->name !== 'login') $arr['rolename'] = $role->description;
                        }

                        $arr['date'] = $item->datereg;
                        $arr['status'] = $item->status;
                        $arr['intrash'] = $item->intrash;
                        $json[] = $arr;
                    }
                    break;
                case 'Role':
                    foreach ($items as $item)
                    {
                        $arr['id'] = $item->id;
                        $arr['name'] = $item->name;
                        $arr['description'] = $item->description;
                        $arr['status'] = $item->status;
                        $arr['intrash'] = $item->intrash;
                        $arr['date'] = $item->date;
                        $json[] = $arr;
                    }
                    break;
            }
            $itemname ? $json[]['itemname'] = $itemname : $json[]['itemname'] = '';
            $json[]['count'] = $count;
            $json = self::json_encode_cyr( $json );
            $this->response->body($json);
        }
        else
        {
            $this->response->body(View::factory('admin/index'));
        }
    }

    // Опубликовать
    public function action_on($table)
    {
        $json = json_decode( $this->request->body() );
        DB::update($table)->set(array('status' => 1))->where('id', '=', $json->id)->execute();
    }

    // Не опубликовать
    public function action_off($table)
    {
        $json = json_decode( $this->request->body() );
        DB::update($table)->set(array('status' => 0))->where('id', '=', $json->id)->execute();
    }

    // В корзину
    public function action_intrash($table)
    {
        $json = json_decode( $this->request->body() );
        DB::update($table)->set(array('intrash' => 1))->where('id', '=', $json->id)->execute();
    }

    // Добавить материал
    public function action_add($model)
    {
        $json = json_decode( $this->request->body() );
        $json = (array) $json;
        // Проверка валидации
        try
        {
            ORM::factory($model)->values( $json )->save();
        }
        catch (ORM_Validation_Exception $e)
        {
            foreach ($e->errors('validation') as $error)
            {
                echo $error . '<br />';
            }
        }
    }

    // Отредактировать материал
    public function action_save($model)
    {
        $json = json_decode( $this->request->body() );
        $json = (array) $json;
        // Проверка валидации
        try
        {
            ORM::factory($model, $json['id'])->values( $json )->save();
        }
        catch (ORM_Validation_Exception $e)
        {
            foreach ($e->errors('validation') as $error)
            {
                echo $error . '<br />';
            }
        }
    }

    // Удаляем материал
    public function action_delete($table) {
        $id = $this->request->param('id');
        DB::delete($table)->where('id', '=', $id)->execute();
    }
}