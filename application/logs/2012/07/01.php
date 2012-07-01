<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-01 15:31:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:31:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:31:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:31:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:32:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:32:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:33:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:33:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:49:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:49:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:55:44 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Auth_User::create_user(), called in C:\wamp\www\frontend\application\classes\controller\admin\users.php on line 45 and defined ~ MODPATH\orm\classes\model\auth\user.php [ 161 ]
2012-07-01 15:55:44 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Auth_User::create_user(), called in C:\wamp\www\frontend\application\classes\controller\admin\users.php on line 45 and defined ~ MODPATH\orm\classes\model\auth\user.php [ 161 ]
--
#0 C:\wamp\www\frontend\modules\orm\classes\model\auth\user.php(161): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 161, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(45): Model_Auth_User->create_user(Array)
#2 [internal function]: Controller_Admin_Users->action_add()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-01 15:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:57:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-01 15:57:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\frontend\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\frontend\application\classes\controller\admin\users.php(45): Model_Auth_User->create_user(Array, Array)
#3 [internal function]: Controller_Admin_Users->action_add()
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 15:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 15:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 15:58:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-01 15:58:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\frontend\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\frontend\application\classes\controller\admin\users.php(45): Model_Auth_User->create_user(Array, Array)
#3 [internal function]: Controller_Admin_Users->action_add()
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 16:00:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:00:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:00:47 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-01 16:00:47 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(Object(Validation))
#1 C:\wamp\www\frontend\modules\orm\classes\model\auth\user.php(167): Kohana_ORM->create(Object(Validation))
#2 C:\wamp\www\frontend\application\classes\controller\admin\users.php(45): Model_Auth_User->create_user(Array, Array)
#3 [internal function]: Controller_Admin_Users->action_add()
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 16:03:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:03:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:12:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:12:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:14:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:14:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:16:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:16:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:19:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:19:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:21:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:21:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:24:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:24:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:31:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:31:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:33:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:33:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:35:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:35:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:43:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:43:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:43:05 --- ERROR: ErrorException [ 1 ]: Call to a member function values() on a non-object ~ MODPATH\orm\classes\kohana\orm.php [ 716 ]
2012-07-01 16:43:05 --- STRACE: ErrorException [ 1 ]: Call to a member function values() on a non-object ~ MODPATH\orm\classes\kohana\orm.php [ 716 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-01 16:44:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:44:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:44:36 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Auth_User::create_user(), called in C:\wamp\www\frontend\application\classes\controller\admin\users.php on line 46 and defined ~ MODPATH\orm\classes\model\auth\user.php [ 161 ]
2012-07-01 16:44:36 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Auth_User::create_user(), called in C:\wamp\www\frontend\application\classes\controller\admin\users.php on line 46 and defined ~ MODPATH\orm\classes\model\auth\user.php [ 161 ]
--
#0 C:\wamp\www\frontend\modules\orm\classes\model\auth\user.php(161): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 161, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(46): Model_Auth_User->create_user(Array)
#2 [internal function]: Controller_Admin_Users->action_add()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-01 16:47:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:47:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:50:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:50:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:53:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:53:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:53:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:53:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 16:59:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 16:59:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 17:02:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 17:02:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 17:04:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 17:04:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 17:04:47 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '6-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (6, '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-01 17:04:47 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '6-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (6, '1') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1413): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\application\classes\controller\admin\users.php(48): Kohana_ORM->add('roles', Object(Model_Role))
#3 [internal function]: Controller_Admin_Users->action_add()
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-01 17:09:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 17:09:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 17:16:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 17:16:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 17:42:42 --- ERROR: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-01 17:42:42 --- STRACE: ErrorException [ 1 ]: Class 'Model_Roles' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-01 17:43:54 --- ERROR: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-07-01 17:43:54 --- STRACE: Kohana_Exception [ 0 ]: The pages property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\roles.php(16): Kohana_ORM->set('pages', '0')
#1 [internal function]: Controller_Admin_Roles->action_add()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Roles))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 18:35:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 18:35:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 18:59:46 --- ERROR: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 18:59:46 --- STRACE: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\main.php(26): Kohana_ORM->__get('role_id')
#1 [internal function]: Controller_Admin_Main->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:00:58 --- ERROR: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 19:00:58 --- STRACE: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(19): Kohana_ORM->__get('role_id')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:11:43 --- ERROR: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 19:11:43 --- STRACE: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(40): Kohana_ORM->__get('user_id')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:11:48 --- ERROR: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 19:11:48 --- STRACE: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(40): Kohana_ORM->__get('role_id')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:13:30 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 19:13:30 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(40): Kohana_ORM->__get('role')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:13:35 --- ERROR: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 19:13:35 --- STRACE: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(40): Kohana_ORM->__get('role_id')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:21:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\index.php [ 41 ]
2012-07-01 19:21:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\index.php [ 41 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 41, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:24:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Role::find_last() ~ APPPATH\views\admin\index.php [ 41 ]
2012-07-01 19:24:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Role::find_last() ~ APPPATH\views\admin\index.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-01 19:27:02 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\index.php [ 43 ]
2012-07-01 19:27:02 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\index.php [ 43 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(43): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 43, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:27:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\index.php [ 43 ]
2012-07-01 19:27:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\index.php [ 43 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 43, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:28:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\index.php [ 41 ]
2012-07-01 19:28:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\index.php [ 41 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 41, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:37:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\index.php [ 41 ]
2012-07-01 19:37:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\index.php [ 41 ]
--
#0 C:\wamp\www\frontend\application\views\admin\index.php(41): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 41, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-01 19:47:47 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
2012-07-01 19:47:47 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 9, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:47:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
2012-07-01 19:47:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 9, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:02 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:02 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:02 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:02 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:12 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:12 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:13 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:13 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:15 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:15 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:33 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:33 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:34 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:34 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 19:52:50 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 19:52:50 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 11, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 20:26:03 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
2012-07-01 20:26:03 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('Controller_App')
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): spl_autoload_call('Controller_App')
#4 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#5 [internal function]: Kohana_Core::auto_load('controller_admi...')
#6 [internal function]: spl_autoload_call('controller_admi...')
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-01 20:26:05 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
2012-07-01 20:26:05 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('Controller_App')
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): spl_autoload_call('Controller_App')
#4 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#5 [internal function]: Kohana_Core::auto_load('controller_admi...')
#6 [internal function]: spl_autoload_call('controller_admi...')
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-01 20:26:35 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
2012-07-01 20:26:35 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('Controller_App')
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): spl_autoload_call('Controller_App')
#4 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#5 [internal function]: Kohana_Core::auto_load('controller_admi...')
#6 [internal function]: spl_autoload_call('controller_admi...')
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-01 20:26:36 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
2012-07-01 20:26:36 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_App::before() should be compatible with that of Kohana_Controller::before() ~ APPPATH\classes\controller\app.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('Controller_App')
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): spl_autoload_call('Controller_App')
#4 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#5 [internal function]: Kohana_Core::auto_load('controller_admi...')
#6 [internal function]: spl_autoload_call('controller_admi...')
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-07-01 20:57:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-01 20:57:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-01 21:02:41 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
2012-07-01 21:02:41 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(10): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 10, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:02:43 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
2012-07-01 21:02:43 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(10): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 10, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:02:51 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:02:51 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:02:52 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:02:52 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:04:57 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:04:57 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:05:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:05:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:05:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:05:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:12:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Role::count() ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
2012-07-01 21:12:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Role::count() ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-01 21:12:25 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
2012-07-01 21:12:25 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-01 21:12:26 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
2012-07-01 21:12:26 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\controller\admin\pages.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-01 21:13:06 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:13:06 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:17:30 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:17:30 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:20:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:20:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:20:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-07-01 21:20:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 8, Array)
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:23:11 --- ERROR: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-01 21:23:11 --- STRACE: Kohana_Exception [ 0 ]: The count property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(11): Kohana_ORM->__get('count')
#1 [internal function]: Controller_Admin_Pages->before()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-01 21:23:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Role::count() ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
2012-07-01 21:23:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Role::count() ~ APPPATH\classes\controller\admin\pages.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}