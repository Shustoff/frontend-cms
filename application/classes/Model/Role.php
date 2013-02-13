<?php defined('SYSPATH') or die('No direct script access.');

class Model_Role extends Model_Auth_Role {
    protected $_table_name = 'roles';

    protected $_has_many = array(
        'users' => array(
            'model' => 'User',
            'through' => 'roles_users'
        )
    );

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty'),
                array('alpha_numeric'),
                array(array($this, 'unique'), array('name', ':value'))
            ),

            'description' => array(
                array('not_empty')
            )
        );
    }

    public function filters()
    {
        return array(
            'name' => array(
                array('trim'),
                array('strip_tags')
            ),

            'description' => array(
                array('trim'),
                array('strip_tags')
            )
        );
    }
}