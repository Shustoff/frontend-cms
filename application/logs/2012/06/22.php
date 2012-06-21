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