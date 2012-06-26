<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalogs extends ORM {

    protected $_table_name = 'catalogs';

    protected $_belongs_to = array(
        'catalogs' => array(
            'model' => 'catalogs',
            'foreign_key' => 'parent_id'
        )
    );
}
