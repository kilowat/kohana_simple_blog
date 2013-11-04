<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-02 07:27:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in C:\xampp\htdocs\system\classes\Kohana\Cookie.php:67
2013-11-02 07:27:38 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 C:\xampp\htdocs\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 C:\xampp\htdocs\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\xampp\htdocs\system\classes\Kohana\Cookie.php:67
2013-11-02 13:33:27 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-11-02 13:33:27 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-11-02 13:34:05 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-11-02 13:34:05 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-11-02 13:34:06 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-11-02 13:34:06 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-11-02 15:36:50 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\SaveContent.php [ 29 ] in file:line
2013-11-02 15:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:18 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\SaveContent.php [ 29 ] in file:line
2013-11-02 15:37:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:20 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\SaveContent.php [ 29 ] in file:line
2013-11-02 15:37:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:35 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:37:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:37:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:37:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:37:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:37:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:37:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:38:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:38:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:38:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:38:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: SaveContent::$filename ~ APPPATH\classes\SaveContent.php [ 14 ] in C:\xampp\htdocs\application\classes\SaveContent.php:14
2013-11-02 15:38:34 --- DEBUG: #0 C:\xampp\htdocs\application\classes\SaveContent.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Main.php(10): SaveContent->save()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\SaveContent.php:14
2013-11-02 15:39:42 --- CRITICAL: ErrorException [ 2 ]: fopen(/include/test): failed to open stream: No such file or directory ~ APPPATH\classes\SaveContent.php [ 14 ] in file:line
2013-11-02 15:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/include/...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\application\classes\SaveContent.php(14): fopen('/include/test', 'w')
#2 C:\xampp\htdocs\application\classes\Controller\Main.php(10): SaveContent->save()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-11-02 15:40:09 --- CRITICAL: ErrorException [ 2 ]: fopen(/include/test.php): failed to open stream: No such file or directory ~ APPPATH\classes\SaveContent.php [ 14 ] in file:line
2013-11-02 15:40:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/include/...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\application\classes\SaveContent.php(14): fopen('/include/test.p...', 'w')
#2 C:\xampp\htdocs\application\classes\Controller\Main.php(10): SaveContent->save()
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2013-11-02 15:46:15 --- CRITICAL: ErrorException [ 1 ]: Call to protected method SaveContent::save() from context 'Controller_Main' ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:46:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:47:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function rpint_r() ~ APPPATH\classes\Controller\Main.php [ 10 ] in file:line
2013-11-02 15:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-02 15:47:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: SaveContent::$filename ~ APPPATH\classes\SaveContent.php [ 28 ] in C:\xampp\htdocs\application\classes\SaveContent.php:28
2013-11-02 15:47:39 --- DEBUG: #0 C:\xampp\htdocs\application\classes\SaveContent.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Main.php(10): SaveContent->open()
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\SaveContent.php:28