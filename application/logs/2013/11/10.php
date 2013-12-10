<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-10 03:33:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-10 03:33:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:35:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-11-10 03:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:35:53 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\Widjet\v_lastNews.php [ 3 ] in file:line
2013-11-10 03:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:37:40 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\Admin\v_admin_news.php [ 6 ] in file:line
2013-11-10 03:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:40:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\Admin\v_admin_news.php [ 6 ] in file:line
2013-11-10 03:40:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:40:09 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\Admin\v_admin_news.php [ 6 ] in file:line
2013-11-10 03:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:40:37 --- CRITICAL: Kohana_Exception [ 0 ]: The as_array property does not exist in the Model_New class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:603
2013-11-10 03:40:37 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('as_array')
#1 C:\xampp\htdocs\application\classes\Controller\Admin\News.php(5): Kohana_ORM->__get('as_array')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:603
2013-11-10 03:41:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_assoc() ~ APPPATH\classes\Controller\Admin\News.php [ 5 ] in file:line
2013-11-10 03:41:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:41:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_assoc() ~ APPPATH\classes\Controller\Admin\News.php [ 5 ] in file:line
2013-11-10 03:41:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:41:17 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\Admin\v_admin_news.php [ 6 ] in file:line
2013-11-10 03:41:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:42:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_News' not found ~ SYSPATH\classes\Kohana\Model.php [ 26 ] in file:line
2013-11-10 03:42:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:43:41 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_New as array ~ APPPATH\views\Admin\v_admin_news_edit.php [ 3 ] in file:line
2013-11-10 03:43:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-10 03:48:31 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'test' for key 'alias_UNIQUE' [ INSERT INTO `news` (`alias`, `name`, `preview`, `body`, `date`, `descriptions`, `keywords`) VALUES ('test', 'test', 'rwr', '', '0', 'test', 'test') ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-11-10 03:48:31 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(2, 'INSERT INTO `ne...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\application\classes\Controller\Admin\News.php(21): Kohana_ORM->save()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-11-10 03:49:57 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in C:\xampp\htdocs\application\classes\Controller\Admin\News.php:21
2013-11-10 03:49:57 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Admin\News.php(21): Kohana_ORM->update()
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Admin\News.php:21
2013-11-10 03:50:27 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update new model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1357 ] in C:\xampp\htdocs\application\classes\Controller\Admin\News.php:21
2013-11-10 03:50:27 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Admin\News.php(21): Kohana_ORM->update()
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Admin\News.php:21
2013-11-10 03:52:21 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'test23' for key 'alias_UNIQUE' [ UPDATE `news` SET `alias` = 'test23' WHERE `id` = '1' ] ~ MODPATH\database\classes\Database\MySQLi.php [ 172 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-11-10 03:52:21 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Database_MySQLi->query(3, 'UPDATE `news` S...', false, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\application\classes\Controller\Admin\News.php(21): Kohana_ORM->update()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-11-10 06:15:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Admin\Page.php [ 20 ] in C:\xampp\htdocs\application\classes\Controller\Admin\Page.php:20
2013-11-10 06:15:40 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Admin\Page.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Page->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Page))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Admin\Page.php:20
2013-11-10 07:08:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: TopMenu ~ APPPATH\views\v_main.php [ 10 ] in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:05 --- DEBUG: #0 C:\xampp\htdocs\application\views\v_main.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: TopMenu ~ APPPATH\views\v_main.php [ 10 ] in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:22 --- DEBUG: #0 C:\xampp\htdocs\application\views\v_main.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: TopMenu ~ APPPATH\views\v_main.php [ 10 ] in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:23 --- DEBUG: #0 C:\xampp\htdocs\application\views\v_main.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: TopMenu ~ APPPATH\views\v_main.php [ 10 ] in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 07:08:24 --- DEBUG: #0 C:\xampp\htdocs\application\views\v_main.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\application\views\v_main.php:10
2013-11-10 11:09:24 --- CRITICAL: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'orm_mptt' at 'MODPATH\orm_mptt' ~ SYSPATH\classes\Kohana\Core.php [ 579 ] in C:\xampp\htdocs\application\bootstrap.php:133
2013-11-10 11:09:24 --- DEBUG: #0 C:\xampp\htdocs\application\bootstrap.php(133): Kohana_Core::modules(Array)
#1 C:\xampp\htdocs\index.php(102): require('C:\xampp\htdocs...')
#2 {main} in C:\xampp\htdocs\application\bootstrap.php:133
2013-11-10 11:11:43 --- CRITICAL: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:11:43 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 C:\xampp\htdocs\modules\orm-mptt\classes\kohana\orm\mptt.php(244): Kohana_ORM->__set('parent_id', NULL)
#2 C:\xampp\htdocs\application\classes\Controller\Admin\Category.php(8): Kohana_ORM_MPTT->make_root()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Category->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:12:44 --- CRITICAL: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:12:44 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 C:\xampp\htdocs\modules\orm-mptt\classes\kohana\orm\mptt.php(244): Kohana_ORM->__set('parent_id', NULL)
#2 C:\xampp\htdocs\application\classes\Controller\Admin\Category.php(8): Kohana_ORM_MPTT->make_root()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Category->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:12:46 --- CRITICAL: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:12:46 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 C:\xampp\htdocs\modules\orm-mptt\classes\kohana\orm\mptt.php(244): Kohana_ORM->__set('parent_id', NULL)
#2 C:\xampp\htdocs\application\classes\Controller\Admin\Category.php(8): Kohana_ORM_MPTT->make_root()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Category->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:12:47 --- CRITICAL: Kohana_Exception [ 0 ]: The parent_id property does not exist in the Model_Category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 11:12:47 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('parent_id', NULL)
#1 C:\xampp\htdocs\modules\orm-mptt\classes\kohana\orm\mptt.php(244): Kohana_ORM->__set('parent_id', NULL)
#2 C:\xampp\htdocs\application\classes\Controller\Admin\Category.php(8): Kohana_ORM_MPTT->make_root()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Category->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:702
2013-11-10 12:47:14 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ APPPATH\classes\Controller\Admin\Category.php [ 7 ] in C:\xampp\htdocs\application\classes\Controller\Admin\Category.php:7
2013-11-10 12:47:14 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Admin\Category.php(7): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Admin\Category.php:7
2013-11-10 12:48:56 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Category as array ~ APPPATH\classes\Controller\Admin\Category.php [ 9 ] in file:line
2013-11-10 12:48:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line