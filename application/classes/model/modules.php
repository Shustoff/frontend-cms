<?php defined('SYSPATH') or die('No direct script access.');

class Model_Modules extends ORM {

    protected $_table_name = 'modules';

    protected $_belongs_to = array(
        'users' => array(
            'model' => 'users',
            'foreign_key' => 'user_id'
        )
    );

}
