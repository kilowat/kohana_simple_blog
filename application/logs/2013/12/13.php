<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-13 02:07:05 --- CRITICAL: Database_Exception [ 2 ]: mysqli_connect():  ~ MODPATH\database\classes\Database\MySQLi.php [ 57 ] in C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php:155
2013-12-13 02:07:05 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php(155): Database_MySQLi->connect()
#1 C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Database_MySQLi->list_columns('categories')
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\modules\orm-mptt\classes\kohana\orm\mptt.php(61): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM_MPTT->__construct(NULL)
#8 C:\xampp\htdocs\application\classes\Controller\Widjet\TopMenu.php(8): Kohana_ORM::factory('Category')
#9 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Widjet_TopMenu->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widjet_TopMenu))
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\application\classes\Controller\Main.php(29): Kohana_Request->execute()
#15 C:\xampp\htdocs\application\classes\Controller\Index.php(10): Controller_Main->before()
#16 C:\xampp\htdocs\system\classes\Kohana\Controller.php(69): Controller_Index->before()
#17 [internal function]: Kohana_Controller->execute()
#18 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#19 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#20 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#21 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#22 {main} in C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php:155
2013-12-13 02:07:07 --- CRITICAL: Database_Exception [ 2 ]: mysqli_connect():  ~ MODPATH\database\classes\Database\MySQLi.php [ 57 ] in C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php:155
2013-12-13 02:07:07 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php(155): Database_MySQLi->connect()
#1 C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php(336): Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1668): Database_MySQLi->list_columns('news')
#3 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\application\classes\Controller\Widjet\LastNews.php(10): Kohana_ORM::factory('News')
#8 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Widjet_LastNews->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Widjet_LastNews))
#11 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\application\classes\Controller\Index.php(14): Kohana_Request->execute()
#14 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#15 [internal function]: Kohana_Controller->execute()
#16 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#17 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#19 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#20 {main} in C:\xampp\htdocs\modules\database\classes\Database\MySQLi.php:155
2013-12-13 10:01:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-13 10:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-13 10:02:42 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/v_comments could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-12-13 10:02:42 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/v_comment...')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/v_comment...', NULL)
#2 C:\xampp\htdocs\application\classes\Controller\Admin\Comments.php(10): Kohana_View::factory('admin/v_comment...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin_Comments->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Comments))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-12-13 10:18:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-13 10:18:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-13 10:24:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_New' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2013-12-13 10:24:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line