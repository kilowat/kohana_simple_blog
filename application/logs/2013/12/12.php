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