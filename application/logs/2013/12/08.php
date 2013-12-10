<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-08 13:13:59 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Category.php [ 36 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:36
2013-12-08 13:13:59 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(36): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 36, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:36
2013-12-08 13:14:34 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Category.php [ 37 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:37
2013-12-08 13:14:34 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(37): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:37
2013-12-08 13:14:36 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Category.php [ 37 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:37
2013-12-08 13:14:36 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(37): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:37
2013-12-08 13:15:27 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Category.php [ 37 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:37
2013-12-08 13:15:27 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(37): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:37
2013-12-08 13:15:55 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT `news`.`id` AS `id`, `news`.`name` AS `name`, `news`.`body` AS `body`, `news`.`date` AS `date`, `news`.`keywords` AS `keywords`, `news`.`descriptions` AS `descriptions`, `news`.`alias` AS `alias`, `news`.`preview` AS `preview`, `news`.`cat_id` AS `cat_id`, `news`.`active` AS `active`, `news`.`title` AS `title` FROM `news` AS `news` WHERE `alias` = ('test1', 'News1') LIMIT 1 ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 13:15:55 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `news`.`...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\application\classes\Controller\Category.php(40): Kohana_ORM->find()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_details()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 13:56:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Paginator' not found ~ APPPATH\classes\Controller\Category.php [ 8 ] in file:line
2013-12-08 13:56:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 13:59:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Paginato' not found ~ APPPATH\classes\Controller\Category.php [ 8 ] in file:line
2013-12-08 13:59:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 14:28:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::limit() ~ APPPATH\classes\Paginator.php [ 22 ] in file:line
2013-12-08 14:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 14:28:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::limit() ~ APPPATH\classes\Paginator.php [ 22 ] in file:line
2013-12-08 14:28:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 14:28:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::limit() ~ APPPATH\classes\Paginator.php [ 22 ] in file:line
2013-12-08 14:28:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-08 14:31:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT `news`.`id` AS `id`, `news`.`name` AS `name`, `news`.`body` AS `body`, `news`.`date` AS `date`, `news`.`keywords` AS `keywords`, `news`.`descriptions` AS `descriptions`, `news`.`alias` AS `alias`, `news`.`preview` AS `preview`, `news`.`cat_id` AS `cat_id`, `news`.`active` AS `active`, `news`.`title` AS `title` FROM `news` AS `news` LIMIT 2 OFFSET -2 ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 14:31:30 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `news`.`...', 'Model_News', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Paginator.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Category.php(9): Paginator->select()
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 14:32:09 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT `news`.`id` AS `id`, `news`.`name` AS `name`, `news`.`body` AS `body`, `news`.`date` AS `date`, `news`.`keywords` AS `keywords`, `news`.`descriptions` AS `descriptions`, `news`.`alias` AS `alias`, `news`.`preview` AS `preview`, `news`.`cat_id` AS `cat_id`, `news`.`active` AS `active`, `news`.`title` AS `title` FROM `news` AS `news` LIMIT 2 OFFSET -2 ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-08 14:32:09 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `news`.`...', 'Model_News', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Paginator.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Category.php(9): Paginator->select()
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251