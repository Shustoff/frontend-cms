<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-17 18:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/user.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-17 18:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/user.js ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-17 18:59:56 --- ERROR: ErrorException [ 2 ]: Exception::getMessage() expects exactly 0 parameters, 1 given ~ APPPATH\classes\controller\admin\auth.php [ 22 ]
2012-06-17 18:59:56 --- STRACE: ErrorException [ 2 ]: Exception::getMessage() expects exactly 0 parameters, 1 given ~ APPPATH\classes\controller\admin\auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Exception::getM...', 'C:\wamp\www\fro...', 22, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\auth.php(22): Exception->getMessage('?????????? ????...')
#2 [internal function]: Controller_Admin_Auth->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-17 19:00:02 --- ERROR: ErrorException [ 2 ]: Exception::getMessage() expects exactly 0 parameters, 1 given ~ APPPATH\classes\controller\admin\auth.php [ 22 ]
2012-06-17 19:00:02 --- STRACE: ErrorException [ 2 ]: Exception::getMessage() expects exactly 0 parameters, 1 given ~ APPPATH\classes\controller\admin\auth.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'Exception::getM...', 'C:\wamp\www\fro...', 22, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\auth.php(22): Exception->getMessage('?????????? ????...')
#2 [internal function]: Controller_Admin_Auth->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Auth))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}