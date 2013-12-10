<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-17 07:19:56 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Category.php [ 7 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:7
2013-11-17 07:19:56 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(7): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:7
2013-11-17 07:34:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH\classes\Controller\Category.php [ 9 ] in C:\xampp\htdocs\application\classes\Controller\Category.php:9
2013-11-17 07:34:31 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Category.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Category.php:9