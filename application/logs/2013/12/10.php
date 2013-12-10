<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-10 02:27:54 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 100 ~ SYSPATH\classes\Kohana\Route.php [ 423 ] in file:line
2013-12-10 02:27:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'C:\xampp\htdocs...', 423, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Route.php(423): preg_match('#^category(?:/(...', 'category/view/t...', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Request.php(466): Kohana_Route->matches(Object(Request))
#3 C:\xampp\htdocs\system\classes\Kohana\Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2013-12-10 04:33:05 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT `news`.`id` AS `id`, `news`.`name` AS `name`, `news`.`body` AS `body`, `news`.`date` AS `date`, `news`.`keywords` AS `keywords`, `news`.`descriptions` AS `descriptions`, `news`.`alias` AS `alias`, `news`.`preview` AS `preview`, `news`.`cat_id` AS `cat_id`, `news`.`active` AS `active`, `news`.`title` AS `title` FROM `news` AS `news` LIMIT 2 OFFSET -2 ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-10 04:33:05 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `news`.`...', 'Model_News', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Paginator.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Category.php(14): Paginator->select()
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-10 04:33:28 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT `news`.`id` AS `id`, `news`.`name` AS `name`, `news`.`body` AS `body`, `news`.`date` AS `date`, `news`.`keywords` AS `keywords`, `news`.`descriptions` AS `descriptions`, `news`.`alias` AS `alias`, `news`.`preview` AS `preview`, `news`.`cat_id` AS `cat_id`, `news`.`active` AS `active`, `news`.`title` AS `title` FROM `news` AS `news` LIMIT 2 OFFSET -2 ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-10 04:33:28 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `news`.`...', 'Model_News', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Paginator.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Category.php(14): Paginator->select()
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-10 04:33:30 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT `news`.`id` AS `id`, `news`.`name` AS `name`, `news`.`body` AS `body`, `news`.`date` AS `date`, `news`.`keywords` AS `keywords`, `news`.`descriptions` AS `descriptions`, `news`.`alias` AS `alias`, `news`.`preview` AS `preview`, `news`.`cat_id` AS `cat_id`, `news`.`active` AS `active`, `news`.`title` AS `title` FROM `news` AS `news` LIMIT 2 OFFSET -2 ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-10 04:33:30 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(1, 'SELECT `news`.`...', 'Model_News', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Paginator.php(22): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Category.php(14): Paginator->select()
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-12-10 04:37:14 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Paginator::$id ~ APPPATH\classes\Paginator.php [ 21 ] in C:\xampp\htdocs\application\classes\Paginator.php:21
2013-12-10 04:37:14 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Paginator.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Category.php(13): Paginator->select()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Paginator.php:21
2013-12-10 04:37:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Paginator::$id ~ APPPATH\classes\Paginator.php [ 21 ] in C:\xampp\htdocs\application\classes\Paginator.php:21
2013-12-10 04:37:42 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Paginator.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Category.php(13): Paginator->select()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Paginator.php:21
2013-12-10 06:30:49 --- CRITICAL: View_Exception [ 0 ]: The requested view Widjet/Paginator/v_paginator could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-12-10 06:30:49 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('Widjet/Paginato...')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('Widjet/Paginato...', NULL)
#2 C:\xampp\htdocs\application\classes\Paginator.php(49): Kohana_View::factory('Widjet/Paginato...')
#3 C:\xampp\htdocs\application\classes\Controller\Category.php(14): Paginator->count()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-12-10 06:42:26 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH\views\v_category_news.php [ 23 ] in file:line
2013-12-10 06:42:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-10 11:28:46 --- CRITICAL: ErrorException [ 2 ]: Division by zero ~ APPPATH\classes\Paginator.php [ 48 ] in C:\xampp\htdocs\application\classes\Paginator.php:48
2013-12-10 11:28:46 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Paginator.php(48): Kohana_Core::error_handler(2, 'Division by zer...', 'C:\xampp\htdocs...', 48, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Category.php(14): Paginator->count()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Paginator.php:48