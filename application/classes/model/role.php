<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends Model_Auth_Role {
    protected $_table_name = 'roles';

    protected $_has_many = array(
        'users' => array(
            'model' => 'user',
            'through' => 'roles_users'
        )
    );
}