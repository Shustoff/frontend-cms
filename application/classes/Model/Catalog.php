<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends ORM {

    protected $_table_name = 'catalogs';

    protected $_belongs_to = array(
        'catalogs' => array(
            'model' => 'Catalog',
            'foreign_key' => 'parent_id'
        )
    );

    public function rules()
    {
        return array(
            'catname' => array(
                array('not_empty')
             ),

            'alias' => array(
                array('not_empty'),
                array('alpha_dash')
            ),

            'content' => array(
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
            'catname' => array(
                array('trim'),
                array('strip_tags')
            ),
            'alias' => array(
                array('trim'),
                array('strip_tags')
            )
        );
    }

}
