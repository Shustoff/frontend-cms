<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'native' => array(
            'name' => 'session',    //  default 'session'
            'lifetime' => 3600,            //  default 0 (The value 0 means "until the browser is closed.")
    ),
    'cookie' => array(
            'name' => 'cookie',    //  default 'session'
            'encrypted' => TRUE,       //  default FALSE
            'lifetime' => 3600,            //  default 0 (The value 0 means "until the browser is closed.")
    ),
    'database' => array(
        'name' => 'session_database',
        'encrypted' => FALSE,
        'lifetime' => Kohana::$config->load('site.session'),
        'group' => 'default',
        'table' => 'sessions',
        'columns' => array(
            'session_id'  => 'session_id',
            'last_active' => 'last_active',
            'contents'    => 'contents'
        ),
        'gc' => 500
    )
);
