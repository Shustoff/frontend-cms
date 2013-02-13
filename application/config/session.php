<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'native' => array(
        'name' => 'session_name',
        'lifetime' => Kohana::$config->load('site.session')
    ),
    'cookie' => array(
        'name' => 'cookie_name',
        'encrypted' => TRUE,
        'lifetime' => Kohana::$config->load('site.session'),
    ),
    'database' => array(
        'name' => 'session_database',
        'encrypted' => TRUE,
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
