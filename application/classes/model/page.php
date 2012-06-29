<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {

    protected $_table_name = 'pages';

    protected $_belongs_to = array(
        'catalogs' => array(
            'model' => 'catalog',
            'foreign_key' => 'catalog_id'
        ),

        'users' => array(
            'model' => 'user',
            'foreign_key' => 'author_id'
        )
    );

}
