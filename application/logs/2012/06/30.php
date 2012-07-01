<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-30 17:27:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2012-06-30 17:27:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-30 17:28:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2012-06-30 17:28:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-30 17:29:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2012-06-30 17:29:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-30 17:30:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2012-06-30 17:30:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-30 17:32:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
2012-06-30 17:32:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_User::where() ~ MODPATH\orm\classes\kohana\auth\orm.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-30 17:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 17:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 17:51:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\blocks\V_addpage.php [ 64 ]
2012-06-30 17:51:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\blocks\V_addpage.php [ 64 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_addpage.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 64, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_addpages()
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-30 17:51:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\blocks\V_addpage.php [ 64 ]
2012-06-30 17:51:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\blocks\V_addpage.php [ 64 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_addpage.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 64, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_addpages()
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-30 17:54:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\blocks\V_addpage.php [ 64 ]
2012-06-30 17:54:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\admin\blocks\V_addpage.php [ 64 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_addpage.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 64, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_addpages()
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-30 17:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 17:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 17:58:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 17:58:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-icons_454545_256x240.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:37:08 --- ERROR: Kohana_Exception [ 0 ]: The catalogs property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-30 18:37:08 --- STRACE: Kohana_Exception [ 0 ]: The catalogs property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_catalogs.php(20): Kohana_ORM->__get('catalogs')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(7): Controller_App->action_main('catalog')
#7 [internal function]: Controller_Admin_Catalogs->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-30 18:37:09 --- ERROR: Kohana_Exception [ 0 ]: The catalogs property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-30 18:37:09 --- STRACE: Kohana_Exception [ 0 ]: The catalogs property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_catalogs.php(20): Kohana_ORM->__get('catalogs')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(7): Controller_App->action_main('catalog')
#7 [internal function]: Controller_Admin_Catalogs->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-30 18:37:10 --- ERROR: Kohana_Exception [ 0 ]: The catalogs property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-30 18:37:10 --- STRACE: Kohana_Exception [ 0 ]: The catalogs property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_catalogs.php(20): Kohana_ORM->__get('catalogs')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(7): Controller_App->action_main('catalog')
#7 [internal function]: Controller_Admin_Catalogs->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-30 18:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:50:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:50:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:50:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:50:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:51:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:51:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:51:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:51:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:52:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:52:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:52:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:52:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:52:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:52:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:52:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:52:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:53:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:53:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:53:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:53:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:53:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:53:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:55:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:55:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:55:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:55:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:55:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:55:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:55:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:55:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:55:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:55:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:57:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:57:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:57:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:57:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:57:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:57:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:58:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:58:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:58:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:58:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:58:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:58:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:58:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:58:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 18:59:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 18:59:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:00:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:00:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:01:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:01:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:02:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:02:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:04:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:04:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:05:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:05:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:05:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:05:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:05:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:05:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:09:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:09:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:10:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:10:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admin/http:/localhost/frontend/admin ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 19:56:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 19:56:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 20:22:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 20:22:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 20:34:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 20:34:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 20:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 20:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 20:44:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 20:44:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 21:41:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 21:41:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}
2012-06-30 21:41:53 --- ERROR: Kohana_Exception [ 0 ]: The content property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-06-30 21:41:53 --- STRACE: Kohana_Exception [ 0 ]: The content property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(45): Kohana_ORM->set('content', '<p>?????????? ?...')
#1 [internal function]: Controller_Admin_Catalogs->action_add()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-30 21:41:59 --- ERROR: Kohana_Exception [ 0 ]: The content property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
2012-06-30 21:41:59 --- STRACE: Kohana_Exception [ 0 ]: The content property does not exist in the Model_Catalog class ~ MODPATH\orm\classes\kohana\orm.php [ 681 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(45): Kohana_ORM->set('content', '<p>?????????? ?...')
#1 [internal function]: Controller_Admin_Catalogs->action_add()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-30 21:42:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-06-30 21:42:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/ui-bg_glass_75_ffffff_1x400.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#1 {main}