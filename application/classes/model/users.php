<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends ORM {

    protected $_table_name = 'users';

    protected $_belongs_to = array(
        'roles' => array(
            'model' => 'roles',
            'foreign_key' => 'role_id'
        ),
    );

}
