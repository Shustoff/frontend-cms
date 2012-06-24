<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-24 20:14:52 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-06-24 20:14:52 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\frontend\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('options')
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#4 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#5 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#6 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(1)
#7 C:\wamp\www\frontend\application\classes\controller\admin\main.php(24): Kohana_ORM::factory('options', 1)
#8 [internal function]: Controller_Admin_Main->action_index()
#9 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#10 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-24 20:31:40 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `catalogs`.`id` = '1' ORDER BY `catalogs`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-24 20:31:40 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `catalogs`.`id` = '1' ORDER BY `catalogs`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', false, Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 C:\wamp\www\frontend\application\views\admin\blocks\V_pages.php(21): Kohana_ORM->__get('catalogs')
#5 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#6 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#7 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(29): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Pages->action_index()
#11 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#12 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#15 {main}
2012-06-24 20:31:42 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-24 20:31:42 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-24 20:31:45 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `catalogs`.`id` = '1' ORDER BY `catalogs`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-24 20:31:45 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `catalogs`.`id` = '1' ORDER BY `catalogs`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', false, Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 C:\wamp\www\frontend\application\views\admin\blocks\V_pages.php(21): Kohana_ORM->__get('catalogs')
#5 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#6 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#7 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(29): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Pages->action_index()
#11 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#12 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#15 {main}
2012-06-24 20:31:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `catalogs`.`id` = '1' ORDER BY `catalogs`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-24 20:31:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `catalogs`.`id` = '1' ORDER BY `catalogs`.`lft` ASC LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', false, Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(566): Kohana_ORM->find()
#4 C:\wamp\www\frontend\application\views\admin\blocks\V_pages.php(21): Kohana_ORM->__get('catalogs')
#5 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#6 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#7 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(29): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Admin_Pages->action_index()
#11 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#12 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#15 {main}
2012-06-24 22:22:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:22:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:22:19 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:22:19 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:23:25 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:23:25 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:23:26 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:23:26 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:23:26 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:23:26 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:23:27 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:23:27 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:23:28 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Catalogs::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\catalogs.php [ 3 ]
2012-06-24 22:23:28 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Catalogs::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\catalogs.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:23:28 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:23:28 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:23:32 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Home::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\home.php [ 3 ]
2012-06-24 22:23:32 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Home::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\home.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\home.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:23:33 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:23:33 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:23:33 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:23:33 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:23:38 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:23:38 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:28:43 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:28:43 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:31:03 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:31:03 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:31:04 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:31:04 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:32:40 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:32:40 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:32:41 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:32:41 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:32:44 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
2012-06-24 22:32:44 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 14 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(14): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 14, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:32:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\controller\app.php [ 19 ]
2012-06-24 22:32:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\controller\app.php [ 19 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 19, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:34:20 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Controller_App::$table ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 22:34:20 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Controller_App::$table ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:34:21 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Controller_App::$table ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 22:34:21 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Controller_App::$table ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:34:48 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 16 ]
2012-06-24 22:34:48 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 16 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 16, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:35:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STATIC, expecting '&' or T_VARIABLE ~ APPPATH\classes\controller\app.php [ 16 ]
2012-06-24 22:35:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STATIC, expecting '&' or T_VARIABLE ~ APPPATH\classes\controller\app.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:35:42 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 16 ]
2012-06-24 22:35:42 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 16 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 16, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:36:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 16 ]
2012-06-24 22:36:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_App::action_index() ~ APPPATH\classes\controller\app.php [ 16 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\app.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 16, Array)
#1 [internal function]: Controller_App->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:36:41 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:36:41 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:37:29 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 5 ]
2012-06-24 22:37:29 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 5 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 5, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:37:59 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 22:37:59 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:38:33 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 22:38:33 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:39:05 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:39:05 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:40:29 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:40:29 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:43:03 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:43:03 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:43:34 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 37 ]
2012-06-24 22:43:34 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:44:09 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:44:09 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:44:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 5 ]
2012-06-24 22:44:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 5 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 5, Array)
#1 [internal function]: Controller_Admin_Pages::action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:45:05 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 22:45:05 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages::action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:45:20 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 37 ]
2012-06-24 22:45:20 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:47:31 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
2012-06-24 22:47:31 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:47:55 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
2012-06-24 22:47:55 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:49:42 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
2012-06-24 22:49:42 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:50:17 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
2012-06-24 22:50:17 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:51:04 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 37 ]
2012-06-24 22:51:04 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\app.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:51:58 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
2012-06-24 22:51:58 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\controller\admin\pages.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-24 22:53:40 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:53:40 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:41 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:53:41 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:43 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Home::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\home.php [ 3 ]
2012-06-24 22:53:43 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Home::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\home.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\home.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:44 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Catalogs::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\catalogs.php [ 3 ]
2012-06-24 22:53:44 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Catalogs::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\catalogs.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:49 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:53:49 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:51 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:53:51 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:52 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:53:52 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:53 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Catalogs::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\catalogs.php [ 3 ]
2012-06-24 22:53:53 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Catalogs::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\catalogs.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:54 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Users::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\users.php [ 3 ]
2012-06-24 22:53:54 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Users::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\users.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\users.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:53:56 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:53:56 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:56:04 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:56:04 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:56:05 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:56:05 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:56:07 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 22:56:07 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 22:56:32 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 5 ]
2012-06-24 22:56:32 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 5 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 5, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 22:57:14 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
2012-06-24 22:57:14 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Options::action_index() should be compatible with that of Controller_App::action_index() ~ APPPATH\classes\controller\admin\options.php [ 2 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\options.php(2): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 2, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:03:14 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:03:14 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:03:15 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:03:15 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:03:17 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:03:17 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:04:12 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:04:12 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:04:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: catalogs ~ APPPATH\views\admin\blocks\V_catalogs.php [ 15 ]
2012-06-24 23:04:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: catalogs ~ APPPATH\views\admin\blocks\V_catalogs.php [ 15 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_catalogs.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 15, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(37): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(7): Controller_App->action_main('catalogs')
#7 [internal function]: Controller_Admin_Catalogs->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-24 23:05:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: catalogs ~ APPPATH\views\admin\blocks\V_catalogs.php [ 15 ]
2012-06-24 23:05:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: catalogs ~ APPPATH\views\admin\blocks\V_catalogs.php [ 15 ]
--
#0 C:\wamp\www\frontend\application\views\admin\blocks\V_catalogs.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 15, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\view.php(61): include('C:\wamp\www\fro...')
#2 C:\wamp\www\frontend\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\fro...', Array)
#3 C:\wamp\www\frontend\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\frontend\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\wamp\www\frontend\application\classes\controller\app.php(37): Kohana_Response->body(Object(View))
#6 C:\wamp\www\frontend\application\classes\controller\admin\catalogs.php(7): Controller_App->action_main('catalogs')
#7 [internal function]: Controller_Admin_Catalogs->action_index()
#8 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#9 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#12 {main}
2012-06-24 23:08:54 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:08:54 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:08:55 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:08:55 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:12:14 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 23:12:14 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:12:15 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 23:12:15 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:12:18 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 23:12:18 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:12:53 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 23:12:53 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:12:54 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 23:12:54 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:14:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
2012-06-24 23:14:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\classes\controller\admin\pages.php [ 9 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\fro...', 9, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:14:44 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
2012-06-24 23:14:44 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_index() ~ APPPATH\classes\controller\admin\pages.php [ 7 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(7): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 7, Array)
#1 [internal function]: Controller_Admin_Pages->action_index()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:15:28 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:15:28 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:15:29 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:15:29 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:16:11 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:16:11 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:18:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:18:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:18:20 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:18:20 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:19:09 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 16 ]
2012-06-24 23:19:09 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 16 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(16): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 16, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:20:05 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:20:05 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:20:39 --- ERROR: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
2012-06-24 23:20:39 --- STRACE: ErrorException [ 2048 ]: Declaration of Controller_Admin_Pages::action_on() should be compatible with that of Controller_App::action_on() ~ APPPATH\classes\controller\admin\pages.php [ 3 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(3): Kohana_Core::error_handler(2048, 'Declaration of ...', 'C:\wamp\www\fro...', 3, Array)
#1 C:\wamp\www\frontend\system\classes\kohana\core.php(496): require('C:\wamp\www\fro...')
#2 [internal function]: Kohana_Core::auto_load('controller_admi...')
#3 [internal function]: spl_autoload_call('controller_admi...')
#4 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(85): class_exists('controller_admi...')
#5 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-24 23:21:06 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 15 ]
2012-06-24 23:21:06 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 15 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 15, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:21:15 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 15 ]
2012-06-24 23:21:15 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 15 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(15): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 15, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:24:26 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:24:26 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:24:27 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:24:27 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-24 23:24:47 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
2012-06-24 23:24:47 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Pages::action_off() ~ APPPATH\classes\controller\admin\pages.php [ 17 ]
--
#0 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(17): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\fro...', 17, Array)
#1 [internal function]: Controller_Admin_Pages->action_off()
#2 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#3 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#6 {main}