<?php defined('SYSPATH') or die('No direct script access.');

class Model_Pages extends ORM {

    protected $_table_name = 'pages';

    protected $_belongs_to = array(
        'catalogs' => array(
            'model' => 'catalogs',
            'foreign_key' => 'catalog_id'
        ),

        'users' => array(
            'model' => 'users',
            'foreign_key' => 'author_id'
        )
    );

}
