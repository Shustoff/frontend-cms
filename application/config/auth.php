<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '4687938',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
        // 'admin@admin.ru' => '4d5851a0a687e2c5a90a3a1158808fc3c95be1b9cae8975db3bd9884cb6a5fe7'
		// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
	),

);
