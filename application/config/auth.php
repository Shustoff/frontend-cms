<?php defined('SYSPATH') or die('No direct access allowed.');

return array(
	'driver'       => 'ORM',
	'hash_method'  => 'sha256',
	'hash_key'     => '4687938',
	'lifetime'     => 3600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver

);
