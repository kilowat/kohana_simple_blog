<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 04:24:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_assoc() ~ APPPATH\classes\Model\News.php [ 44 ] in file:line
2013-11-08 04:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:27:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: alias ~ APPPATH\views\Admin\v_admin_news_edit.php [ 4 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:4
2013-11-08 04:27:04 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:4
2013-11-08 04:27:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: alias ~ APPPATH\views\Admin\v_admin_news_edit.php [ 4 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:4
2013-11-08 04:27:38 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:4
2013-11-08 04:29:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 44 ] in file:line
2013-11-08 04:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:38:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 44 ] in file:line
2013-11-08 04:38:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:38:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 44 ] in file:line
2013-11-08 04:38:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:38:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 44 ] in file:line
2013-11-08 04:38:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:41:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 44 ] in file:line
2013-11-08 04:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:44:12 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$id ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:44:12 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:44:38 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$nam ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:44:38 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:44:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:44:45 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:45:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:45:02 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:46:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_assoc() ~ APPPATH\classes\Model\News.php [ 45 ] in file:line
2013-11-08 04:46:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 04:49:01 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:49:01 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 04:51:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 45 ] in file:line
2013-11-08 04:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 05:07:19 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 05:07:19 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 05:07:55 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 05:07:55 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 05:08:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::as_object() ~ APPPATH\classes\Model\News.php [ 45 ] in file:line
2013-11-08 05:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 05:09:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\Admin\v_admin_news_edit.php [ 2 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2
2013-11-08 05:09:44 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\Admin\v_admin_main.php(32): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news_edit.php:2