<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-22 00:18:41 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:18:41 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:18:46 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:18:46 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:18:48 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:18:48 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:18:51 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:18:51 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:18:53 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 20 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:18:53 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 20 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:18:54 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:18:54 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:19:00 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:19:00 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:19:02 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:19:02 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:19:02 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:19:02 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:19:03 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:19:03 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:19:03 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:19:03 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:45:46 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:45:46 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:45:47 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:45:47 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:45:48 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:45:48 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:46:42 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 20 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:46:42 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 20 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:46:42 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:46:42 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:46:46 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:46:46 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:47:05 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:47:05 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:47:08 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:47:08 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:50:16 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:50:16 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:51:32 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:51:32 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:53:38 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:53:38 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:53:40 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:53:40 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:53:43 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:53:43 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:53:45 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:53:45 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:54:37 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:54:37 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:54:39 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 20 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:54:39 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 20 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:54:42 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:54:42 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: ID [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT ID OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:55:46 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Названию [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT Названию OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:55:46 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Названию [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT Названию OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 00:55:47 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: Названию [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT Названию OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 00:55:47 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: Названию [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `id` LIMIT Названию OFFSET 0 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:07:36 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:07:36 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:08:57 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:08:57 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:08:59 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:08:59 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:09:08 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:09:08 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 15 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:10:40 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:10:40 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:12:14 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:12:14 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:13:25 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:13:25 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:14:09 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:14:09 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:15:27 --- ERROR: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:15:27 --- STRACE: Database_Exception [ 1327 ]: Undeclared variable: OFFSET [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `ID` LIMIT  OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:17:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:17:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:17:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:17:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:17:22 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:17:22 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 01:17:32 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-22 01:17:32 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Названию' in 'order clause' [ SELECT `pages`.* FROM `pages` AS `pages` WHERE `intrash` = '0' ORDER BY `Названию` LIMIT 5 OFFSET 5 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\frontend\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `pages`....', 'Model_Pages', Array)
#1 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\frontend\modules\orm\classes\kohana\orm.php(922): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\frontend\application\classes\controller\admin\pages.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Pages->action_index()
#5 C:\wamp\www\frontend\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#6 C:\wamp\www\frontend\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\frontend\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\frontend\index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 14:14:58 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2012-06-22 14:14:58 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('options')
#3 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#4 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#5 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#6 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(1)
#7 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/main.php(24): Kohana_ORM::factory('options', 1)
#8 [internal function]: Controller_Admin_Main->action_index()
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#10 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#13 {main}
2012-06-22 15:12:23 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 15:12:23 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 15:12:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 15:12:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 15:15:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 15:15:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 15:19:26 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 15:19:26 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 15:19:29 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 15:19:29 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'intrash' in 'where clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 15:25:47 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:25:47 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(18): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:25:48 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:25:48 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(18): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:25:48 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:25:48 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(18): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:27:27 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:27:27 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:27:27 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:27:27 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:27:31 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:27:31 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:30:39 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:30:39 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:30:39 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:30:39 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(18): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:30:52 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:30:52 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:30:53 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:30:53 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:33:34 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:33:34 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:33:37 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:33:37 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:34:42 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-06-22 15:34:42 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Catalogs class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(18): Kohana_ORM->__get('name')
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:49:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/views/admin/blocks/V_pages.php [ 85 ]
2012-06-22 15:49:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/views/admin/blocks/V_pages.php [ 85 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 85, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:49:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
2012-06-22 15:49:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 84, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:49:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/views/admin/blocks/V_pages.php [ 85 ]
2012-06-22 15:49:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH/views/admin/blocks/V_pages.php [ 85 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 85, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Pages->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:54:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
2012-06-22 15:54:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 84, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:54:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
2012-06-22 15:54:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 84, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:54:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
2012-06-22 15:54:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 84, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:54:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
2012-06-22 15:54:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 84, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 15:54:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
2012-06-22 15:54:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: countpages ~ APPPATH/views/admin/blocks/V_catalogs.php [ 84 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 84, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 16:39:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:39:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:39:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:39:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:39:02 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:39:02 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:39:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:39:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:39:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:39:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catalogs.lft' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catalogs`.`lft` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:58:03 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-06-22 16:58:03 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Applications/M...', 315, Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'catalogs')
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Applications/MAMP/htdocs/frontend/modules/orm-mptt/classes/kohana/orm/mptt.php(61): Kohana_ORM->__construct(NULL)
#4 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(11): Kohana_ORM::factory('catalogs')
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 16:58:04 --- ERROR: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
2012-06-22 16:58:04 --- STRACE: ErrorException [ 2 ]: array_merge() [function.array-merge]: Argument #2 is not an array ~ MODPATH/orm/classes/kohana/orm.php [ 315 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_merge() [...', '/Applications/M...', 315, Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(315): array_merge(Array, 'catalogs')
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#3 /Applications/MAMP/htdocs/frontend/modules/orm-mptt/classes/kohana/orm/mptt.php(61): Kohana_ORM->__construct(NULL)
#4 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(37): Kohana_ORM_MPTT->__construct(NULL)
#5 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(1525): Kohana_ORM::factory('catalogs')
#6 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(560): Kohana_ORM->_related('catalogs')
#7 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_pages.php(21): Kohana_ORM->__get('catalogs')
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#10 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#11 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#12 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/pages.php(29): Kohana_Response->body(Object(View))
#13 [internal function]: Controller_Admin_Pages->action_index()
#14 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Pages))
#15 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#18 {main}
2012-06-22 16:59:54 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catparent' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catparent` LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:59:54 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catparent' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catparent` LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:59:55 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catparent' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catparent` LIMIT 10 OFFSET 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:59:55 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catparent' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catparent` LIMIT 10 OFFSET 10 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 16:59:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'catparent' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catparent` LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-06-22 16:59:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'catparent' in 'order clause' [ SELECT `catalogs`.* FROM `catalogs` AS `catalogs` WHERE `intrash` = '0' ORDER BY `catparent` LIMIT 10 OFFSET 0 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Applications/MAMP/htdocs/frontend/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `catalog...', 'Model_Catalogs', Array)
#1 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(963): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Applications/MAMP/htdocs/frontend/modules/orm/classes/kohana/orm.php(922): Kohana_ORM->_load_result(true)
#3 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(18): Kohana_ORM->find_all()
#4 [internal function]: Controller_Admin_Catalogs->action_index()
#5 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#6 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#9 {main}
2012-06-22 17:01:54 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
2012-06-22 17:01:54 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 17:01:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
2012-06-22 17:01:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 17:01:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
2012-06-22 17:01:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 17:01:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
2012-06-22 17:01:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-22 17:01:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
2012-06-22 17:01:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/blocks/V_catalogs.php [ 20 ]
--
#0 /Applications/MAMP/htdocs/frontend/application/views/admin/blocks/V_catalogs.php(20): Kohana_Core::error_handler(8, 'Trying to get p...', '/Applications/M...', 20, Array)
#1 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(343): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/frontend/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/frontend/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/frontend/application/classes/controller/admin/catalogs.php(29): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Admin_Catalogs->action_index()
#7 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Catalogs))
#8 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Applications/MAMP/htdocs/frontend/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/frontend/index.php(109): Kohana_Request->execute()
#11 {main}