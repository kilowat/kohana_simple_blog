<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-06 05:29:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: alias ~ APPPATH\views\Admin\v_admin_news.php [ 7 ] in C:\xampp\htdocs\application\views\Admin\v_admin_news.php:7
2013-11-06 05:29:39 --- DEBUG: #0 C:\xampp\htdocs\application\views\Admin\v_admin_news.php(7): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 7, Array)
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
#14 {main} in C:\xampp\htdocs\application\views\Admin\v_admin_news.php:7