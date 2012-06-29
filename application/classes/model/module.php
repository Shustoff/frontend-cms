<?php defined('SYSPATH') or die('No direct script access.');

class Model_Module extends ORM {

    protected $_table_name = 'modules';

    protected $_belongs_to = array(
        'users' => array(
            'model' => 'user',
            'foreign_key' => 'user_id'
        )
    );

}
