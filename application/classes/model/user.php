<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
    protected $_table_name = 'users';

    protected $_has_many = array(
        'roles' => array(
            'model' => 'role',
            'through' => 'roles_users'
        )
    );
}