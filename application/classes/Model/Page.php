<?php defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {

    protected $_table_name = 'pages';

    protected $_reload_on_wakeup = FALSE;

    protected $_belongs_to = array(
        'catalogs' => array(
            'model' => 'Catalog',
            'foreign_key' => 'catalog_id'
        ),
        'users' => array(
            'model' => 'User',
            'foreign_key' => 'author_id'
        )
    );

    public function rules()
    {
        return array(
            'pagename' => array(
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
            'pagename' => array(
                array('trim'),
                array('strip_tags')
            ),
            'alias' => array(
                array('trim'),
                array('strip_tags')
            ),
            'metadesc' => array(
                array('trim'),
                array('strip_tags')
            ),
            'metakeywords' => array(
                array('trim'),
                array('strip_tags')
            )
        );
    }
}
