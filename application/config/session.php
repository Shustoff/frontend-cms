<?php defined('SYSPATH') or die('No direct script access.');

return array(
    'database' => array(
        'name' => 'session_database',
        'encrypted' => FALSE,
        'lifetime' => 3600,
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
