<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-15 05:51:02 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Model\News.php [ 34 ] in C:\xampp\htdocs\application\classes\Model\News.php:34
2013-12-15 05:51:02 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\News.php(34): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 34, Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(408): Model_News->rules()
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\xampp\htdocs\application\classes\Controller\Admin\News.php(63): Kohana_ORM->save()
#6 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\application\classes\Model\News.php:34
2013-12-15 16:59:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-15 16:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-15 17:08:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\Admin\v_admin_news_add.php [ 8 ] in file:line
2013-12-15 17:08:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-15 17:08:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\Admin\v_admin_news_add.php [ 8 ] in file:line
2013-12-15 17:08:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-15 17:09:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\Admin\v_admin_news_add.php [ 8 ] in file:line
2013-12-15 17:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-15 17:09:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\Admin\v_admin_news_add.php [ 8 ] in file:line
2013-12-15 17:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-15 17:09:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\Admin\v_admin_news_add.php [ 8 ] in file:line
2013-12-15 17:09:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line