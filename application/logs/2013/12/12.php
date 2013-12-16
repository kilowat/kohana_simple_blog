<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-12 07:59:09 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$name ~ APPPATH\classes\Controller\Category.php [ 50 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:50
2013-12-12 07:59:09 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:50
2013-12-12 13:03:12 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-12-12 13:03:12 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comments))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-12-12 13:36:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_commetns' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-12 13:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 13:36:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-12 13:36:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 13:37:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-12 13:37:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 13:42:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-12 13:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 13:42:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-12 13:42:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 13:43:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-12 13:43:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:21:01 --- CRITICAL: Kohana_Exception [ 0 ]: The comment property does not exist in the Model_News class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:603
2013-12-12 14:21:01 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('comment')
#1 C:\xampp\htdocs\application\classes\Controller\Comments.php(26): Kohana_ORM->__get('comment')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Comments->action_reload()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comments))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:603
2013-12-12 14:30:36 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Controller_Comments::$_id as non static ~ APPPATH\classes\Controller\Comments.php [ 26 ] in C:\xampp\htdocs\application\classes\Controller\Comments.php:26
2013-12-12 14:30:36 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Comments.php(26): Kohana_Core::error_handler(2048, 'Accessing stati...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Comments->action_reload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comments))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Comments.php:26
2013-12-12 14:31:12 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Controller_Comments::$_id as non static ~ APPPATH\classes\Controller\Comments.php [ 26 ] in C:\xampp\htdocs\application\classes\Controller\Comments.php:26
2013-12-12 14:31:12 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Comments.php(26): Kohana_Core::error_handler(2048, 'Accessing stati...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Comments->action_reload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comments))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Comments.php:26
2013-12-12 14:35:53 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\views\v_category_news_details.php [ 47 ] in C:\xampp\htdocs\application\views\v_category_news_details.php:47
2013-12-12 14:35:53 --- DEBUG: #0 C:\xampp\htdocs\application\views\v_category_news_details.php(47): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\v_main.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\application\views\v_category_news_details.php:47
2013-12-12 14:36:21 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:41:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\classes\Controller\Comments.php [ 26 ] in C:\xampp\htdocs\application\classes\Controller\Comments.php:26
2013-12-12 14:41:40 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Comments.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Comments->action_reload()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Comments))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Comments.php:26
2013-12-12 14:42:24 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:42:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:44:45 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:44:48 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:44:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:44:53 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:44:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:45:01 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:45:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:45:18 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:45:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:45:50 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:45:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-12 14:45:58 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Controller_Comments::$_id ~ APPPATH\classes\Controller\Comments.php [ 11 ] in file:line
2013-12-12 14:45:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line