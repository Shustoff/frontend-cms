<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-26 00:47:02 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-06-26 00:47:02 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
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
2012-06-26 00:47:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `id` FROM `modules` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `users` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalogs` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `pages` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-26 00:47:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `id` FROM `modules` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `users` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `catalogs` WHERE `intrash` = '1' UNION ALL SELECT `id` FROM `pages` WHERE `intrash` = '1' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `id` FRO...', false, Array)
#1 C:\wamp\www\frontend\application\classes\controller\admin\trash.php(15): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Admin_Trash->action_index()
#3 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Trash))
#4 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-26 00:47:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `users`.* FROM `users` AS `users` WHERE `intrash` = '0' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-26 00:47:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `users`.* FROM `users` AS `users` WHERE `intrash` = '0' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users`....', 'Model_Users', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\app.php(19): Kohana_ORM->find_all()
#4 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#5 [internal function]: Controller_Admin_Users->action_index()
#6 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#10 {main}
2012-06-26 00:47:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `modules`.* FROM `modules` AS `modules` WHERE `intrash` = '0' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-26 00:47:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `modules`.* FROM `modules` AS `modules` WHERE `intrash` = '0' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `modules...', 'Model_Modules', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\app.php(19): Kohana_ORM->find_all()
#4 C:\wamp\www\frontend\application\classes\controller\admin\modules.php(7): Controller_App->action_main('modules')
#5 [internal function]: Controller_Admin_Modules->action_index()
#6 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Modules))
#7 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#10 {main}
2012-06-26 00:47:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `users`.* FROM `users` AS `users` WHERE `intrash` = '0' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-26 00:47:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `users`.* FROM `users` AS `users` WHERE `intrash` = '0' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `users`....', 'Model_Users', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\app.php(19): Kohana_ORM->find_all()
#4 C:\wamp\www\frontend\application\classes\controller\admin\users.php(7): Controller_App->action_main('users')
#5 [internal function]: Controller_Admin_Users->action_index()
#6 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#10 {main}