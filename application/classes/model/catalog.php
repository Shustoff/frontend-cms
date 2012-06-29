<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends ORM {

    protected $_table_name = 'catalogs';

    protected $_belongs_to = array(
        'catalogs' => array(
            'model' => 'catalog',
            'foreign_key' => 'parent_id'
        )
    );
}
