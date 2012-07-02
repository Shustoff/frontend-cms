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
        // 'admin' => 'admin123'
		// 'admin' => 'ac6f6788b30fa58d5fbddad35140bad44b0ce132dec42bf54f160f1ac451722d',
	),

);
