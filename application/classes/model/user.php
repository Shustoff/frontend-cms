<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
    protected $_table_name = 'users';

    protected $_has_many = array(
        'roles' => array(
            'model' => 'role',
            'through' => 'roles_users'
        )
    );

    public function rules()
    {
        return array(
            'email' => array(
                array('not_empty'),
                array('email'),
                array(array($this, 'unique'), array('email', ':value')),
             ),

            'username' => array(
                array('not_empty'),
                array('alpha_numeric'),
                array('max_length', array(':value', 32)),
        		array(array($this, 'unique'), array('username', ':value')),
            ),

            'password' => array(
                array('not_empty'),
                array('min_length', array(':value', 8))
            )
        );
    }

    public function filters()
    {
        return array(
            'email' => array(
                array('trim'),
                array('strip_tags')
            ),
            'password' => array(
                array(array(Auth::instance(), 'hash'))
            ),
            'username' => array(
                array('trim'),
                array('strip_tags')
            ),
            'firstname' => array(
                array('trim'),
                array('strip_tags')
            ),
            'lastname' => array(
                array('trim'),
                array('strip_tags')
            )
        );
    }

}