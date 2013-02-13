<?php defined('SYSPATH') or die('No direct script access.');

class Model_Module extends ORM {

    protected $_table_name = 'modules';

    protected $_belongs_to = array(
        'users' => array(
            'model' => 'User',
            'foreign_key' => 'author_id'
        )
    );

    public function rules()
    {
        return array(
            'name' => array(
                array('not_empty')
             ),

            'systemname' => array(
                array('not_empty'),
                array('alpha_numeric')
            ),

            'content' => array(
                array('not_empty')
            ),

            'type' => array(
                array('not_empty')
            ),

            'status' => array(
                array('equals', array(':value', '1'))
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
            'systemname' => array(
                array('trim'),
                array('strip_tags')
            )
        );
    }

}
