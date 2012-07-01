<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-29 15:04:43 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH\email' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2012-06-29 15:04:43 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH\email' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\wamp\www\frontend\application\bootstrap.php(111): Kohana_Core::modules(Array)
#1 C:\wamp\www\frontend\index.php(102): require('C:\wamp\www\fro...')
#2 {main}
2012-06-29 15:05:26 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH\email' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2012-06-29 15:05:26 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'email' at 'MODPATH\email' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\wamp\www\frontend\application\bootstrap.php(111): Kohana_Core::modules(Array)
#1 C:\wamp\www\frontend\index.php(102): require('C:\wamp\www\fro...')
#2 {main}
2012-06-29 15:08:58 --- ERROR: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Users class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 15:08:58 --- STRACE: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Users class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 15:08:59 --- ERROR: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Users class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 15:08:59 --- STRACE: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Users class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 15:09:06 --- ERROR: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Users class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 15:09:06 --- STRACE: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Users class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 15:59:39 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 15:59:39 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('roleses')
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('roles')
#7 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#8 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#9 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#10 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#11 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#12 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#13 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#14 [internal function]: Controller_Admin_Users->action_index()
#15 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#16 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#19 {main}
2012-06-29 15:59:41 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 15:59:41 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('roleses')
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('roles')
#7 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#8 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#9 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#10 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#11 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#12 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#13 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#14 [internal function]: Controller_Admin_Users->action_index()
#15 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#16 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#19 {main}
2012-06-29 15:59:43 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 15:59:43 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('roleses')
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('roles')
#7 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#8 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#9 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#10 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#11 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#12 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#13 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#14 [internal function]: Controller_Admin_Users->action_index()
#15 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#16 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#19 {main}
2012-06-29 15:59:43 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 15:59:43 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('roleses')
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('roles')
#7 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#8 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#9 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#10 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#11 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#12 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#13 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#14 [internal function]: Controller_Admin_Users->action_index()
#15 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#16 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#19 {main}
2012-06-29 15:59:46 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 15:59:46 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.roleses' doesn't exist [ SHOW FULL COLUMNS FROM `roleses` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('roleses')
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(584): Kohana_ORM::factory('roles')
#7 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('roles')
#8 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#9 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#10 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#11 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#12 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#13 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#14 [internal function]: Controller_Admin_Users->action_index()
#15 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#16 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#19 {main}
2012-06-29 16:17:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:17:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:18:02 --- ERROR: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:18:02 --- STRACE: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:18:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:18:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:19:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\admin\blocks\V_pages.php [ 15 ]
2012-06-29 16:19:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH\views\admin\blocks\V_pages.php [ 15 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_pages.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 15, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Controller_App->action_main('page')
#7 [internal function]: Controller_Admin_Pages->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 16:23:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:23:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:23:38 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:23:38 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:23:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:23:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:24:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:24:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:26:35 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:26:35 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:26:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:26:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:28:48 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:28:48 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:29:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:29:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:29:17 --- ERROR: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:29:17 --- STRACE: ErrorException [ 1 ]: Class 'Model_Pages' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:29:24 --- ERROR: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:29:24 --- STRACE: ErrorException [ 1 ]: Class 'Model_Modules' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:36:08 --- ERROR: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 16:36:08 --- STRACE: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_adduser.php(47): Kohana_ORM->__get('rolename')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\admin\users.php(38): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Users->action_addusers()
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-29 16:36:09 --- ERROR: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 16:36:09 --- STRACE: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_adduser.php(47): Kohana_ORM->__get('rolename')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\admin\users.php(38): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Users->action_addusers()
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-29 16:36:12 --- ERROR: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 16:36:12 --- STRACE: Kohana_Exception [ 0 ]: The rolename property does not exist in the Model_Role class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_adduser.php(47): Kohana_ORM->__get('rolename')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\admin\users.php(38): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Users->action_addusers()
#7 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-29 16:40:03 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:40:03 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:40:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:40:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Users' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:40:36 --- ERROR: ErrorException [ 1 ]: Class 'Model_Mail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:40:36 --- STRACE: ErrorException [ 1 ]: Class 'Model_Mail' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:41:13 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 16:41:13 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\stats.php(16): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Stats->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Stats))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 16:41:14 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 16:41:14 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\stats.php(16): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Stats->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Stats))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 16:41:43 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 16:41:43 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\trash.php(15): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Trash->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Trash))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 16:41:52 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 16:41:52 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\trash.php(15): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Trash->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Trash))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 16:41:54 --- ERROR: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-29 16:41:54 --- STRACE: Database_Exception [ 1146 ]: Table 'frontend.module' doesn't exist [ SELECT `id` FROM `module` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `user` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalog` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `page` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\trash.php(15): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Trash->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Trash))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 16:47:51 --- ERROR: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:47:51 --- STRACE: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 16:47:55 --- ERROR: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-06-29 16:47:55 --- STRACE: ErrorException [ 1 ]: Class 'Model_Options' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 17:08:55 --- ERROR: Kohana_Exception [ 0 ]: The sdfds property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 17:08:55 --- STRACE: Kohana_Exception [ 0 ]: The sdfds property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('sdfds')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 17:33:27 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH\orm-mptt' ~ SYSPATH\classes\kohana\core.php [ 542 ]
2012-06-29 17:33:27 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm-mptt' at 'MODPATH\orm-mptt' ~ SYSPATH\classes\kohana\core.php [ 542 ]
--
#0 C:\wamp\www\frontend\application\bootstrap.php(111): Kohana_Core::modules(Array)
#1 C:\wamp\www\frontend\index.php(102): require('C:\wamp\www\fro...')
#2 {main}
2012-06-29 17:34:32 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 17:34:32 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 17:34:39 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 17:34:39 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 17:51:40 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 17:51:40 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('role')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 17:51:41 --- ERROR: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 17:51:41 --- STRACE: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('role')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 17:56:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 17:56:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 17:56:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 17:56:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 17:57:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 17:57:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 17:57:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 17:57:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:09:12 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 18:09:12 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('name')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:09:13 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 18:09:13 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('name')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:09:54 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 18:09:54 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('users')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:09:55 --- ERROR: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 18:09:55 --- STRACE: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('users')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:11:44 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:11:44 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 18:11:45 --- ERROR: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:11:45 --- STRACE: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 18:14:24 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-06-29 18:14:24 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_ORM->__get('name')
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:17:41 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:17:41 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:17:41 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:17:41 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:17:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:17:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:17:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:17:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:18:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$email ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:18:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$email ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:18:23 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$email ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
2012-06-29 18:18:23 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$email ~ APPPATH\views\admin\blocks\V_users.php [ 20 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_users.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 20, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(38): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#7 [internal function]: Controller_Admin_Users->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-29 18:19:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:19:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:19:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:19:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:20:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:20:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:20:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:20:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:20:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:20:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 18:21:08 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:21:08 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$roles ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:21:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:21:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$role ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 18:21:38 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\app.php [ 29 ]
2012-06-29 18:21:38 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\controller\app.php [ 29 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(29): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\fro...', 29, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('user')
#2 [internal function]: Controller_Admin_Users->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-29 19:19:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\classes\controller\admin\users.php [ 9 ]
2012-06-29 19:19:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\classes\controller\admin\users.php [ 9 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\users.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 9, Array)
#1 [internal function]: Controller_Admin_Users->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-29 19:19:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\classes\controller\admin\users.php [ 9 ]
2012-06-29 19:19:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: items ~ APPPATH\classes\controller\admin\users.php [ 9 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\users.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 9, Array)
#1 [internal function]: Controller_Admin_Users->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}