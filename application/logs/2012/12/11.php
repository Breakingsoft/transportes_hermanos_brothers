<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-11 08:08:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ceeb_codes' not found ~ APPPATH/classes/Controller/Static.php [ 304 ] in :
2012-12-11 08:08:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 08:09:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ceeb_codes' not found ~ APPPATH/classes/Controller/Static.php [ 304 ] in :
2012-12-11 08:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 08:09:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ceeb_codes' not found ~ APPPATH/classes/Controller/Static.php [ 304 ] in :
2012-12-11 08:09:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 08:10:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ceeb_codes' not found ~ APPPATH/classes/Controller/Static.php [ 304 ] in :
2012-12-11 08:10:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 08:13:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ceeb_codes' not found ~ APPPATH/classes/Controller/Static.php [ 304 ] in :
2012-12-11 08:13:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 08:16:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_ceebCodes' not found ~ APPPATH/classes/Controller/Static.php [ 304 ] in :
2012-12-11 08:16:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 08:16:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ceeb_codes ~ APPPATH/views/pages/codes.php [ 4 ] in /var/www/BreakingSoft/application/views/pages/codes.php:4
2012-12-11 08:16:50 --- DEBUG: #0 /var/www/BreakingSoft/application/views/pages/codes.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 4, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/BreakingSoft/application/views/template.php(42): Kohana_View->__toString()
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/BreakingSoft/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#9 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/BreakingSoft/application/views/pages/codes.php:4
2012-12-11 08:16:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: ceeb_codes ~ APPPATH/views/pages/codes.php [ 4 ] in /var/www/BreakingSoft/application/views/pages/codes.php:4
2012-12-11 08:16:51 --- DEBUG: #0 /var/www/BreakingSoft/application/views/pages/codes.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 4, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/BreakingSoft/application/views/template.php(42): Kohana_View->__toString()
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/BreakingSoft/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#9 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/BreakingSoft/application/views/pages/codes.php:4
2012-12-11 08:51:01 --- EMERGENCY: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH/views/templates/header.php [ 17 ] in :
2012-12-11 08:51:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', '/var/www/Breaki...', 17, Array)
#1 /var/www/BreakingSoft/application/views/templates/header.php(17): split()
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/BreakingSoft/application/views/template.php(31): Kohana_View->__toString()
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/BreakingSoft/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#10 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#16 {main} in :
2012-12-11 10:41:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 960 ] in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 960, Array)
#1 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 960 ] in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:30 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 960, Array)
#1 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 960 ] in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:35 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 960, Array)
#1 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 960 ] in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:40 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 960, Array)
#1 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 960 ] in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:41:43 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 960, Array)
#1 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:43:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 960 ] in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 10:43:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 960, Array)
#1 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#2 {main} in /var/www/BreakingSoft/system/classes/Kohana/Request.php:960
2012-12-11 11:15:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ceeb_code ~ APPPATH/classes/Controller/Codes.php [ 24 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:15:36 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 24, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:18:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ceeb_code ~ APPPATH/classes/Controller/Codes.php [ 24 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:18:41 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 24, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:19:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ceeb_code ~ APPPATH/classes/Controller/Codes.php [ 24 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:19:23 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 24, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:29:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_ceebCodes::$_ceeb_code_tabla ~ APPPATH/classes/Model/ceebCodes.php [ 8 ] in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:8
2012-12-11 11:29:44 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/Breaki...', 8, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(20): Model_ceebCodes->add_ceeb_code(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_get_all()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:8
2012-12-11 11:31:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_ceebCodes::$_ceeb_code_tabla ~ APPPATH/classes/Model/ceebCodes.php [ 9 ] in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:9
2012-12-11 11:31:45 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/Breaki...', 9, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(20): Model_ceebCodes->add_ceeb_code(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_get_all()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:9
2012-12-11 11:34:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_ceebCodes::$_ceeb_code_tabla ~ APPPATH/classes/Model/ceebCodes.php [ 9 ] in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:9
2012-12-11 11:34:56 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/Breaki...', 9, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(20): Model_ceebCodes->add_ceeb_code(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_get_all()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:9
2012-12-11 11:41:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Model_ceebCodes::$_ceeb_code_tabla ~ APPPATH/classes/Model/ceebCodes.php [ 9 ] in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:9
2012-12-11 11:41:05 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/Breaki...', 9, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(20): Model_ceebCodes->add_ceeb_code(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_get_all()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:9
2012-12-11 11:49:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: ceeb_code ~ APPPATH/classes/Controller/Codes.php [ 24 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:49:53 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(24): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/Breaki...', 24, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:24
2012-12-11 11:54:15 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '222344' for key 'PRIMARY' [ INSERT INTO `ceeb_codes` (`ceeb_code`, `high_school_name`) VALUES ('222344', 'Spark Academy') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 11:54:15 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(11): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(28): Model_ceebCodes->add_ceeb_code(Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 13:50:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/edit_ceeb_code/880000 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-11 13:50:17 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/edit_ceeb...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/edit_ceeb...', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(41): Kohana_View::factory('pages/edit_ceeb...')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-11 13:51:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/edit_ceeb_code/880000 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-11 13:51:33 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/edit_ceeb...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/edit_ceeb...', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(41): Kohana_View::factory('pages/edit_ceeb...')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-11 13:52:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/edit_ceeb_code/222344 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-11 13:52:06 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/edit_ceeb...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/edit_ceeb...', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(41): Kohana_View::factory('pages/edit_ceeb...')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-11 14:02:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_View::bind(), called in /var/www/BreakingSoft/application/classes/Controller/Codes.php on line 45 and defined ~ SYSPATH/classes/Kohana/View.php [ 314 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:314
2012-12-11 14:02:08 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(314): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/Breaki...', 314, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(45): Kohana_View->bind(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:314
2012-12-11 14:55:08 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column '0' in 'field list' [ UPDATE `ceeb_codes` SET `0` = 'ceeb_code', `1` = 'high_school_name', `2` = '880000', `3` = 'BALBOA ACADEMo' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 14:55:08 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `ceeb_co...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(23): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(53): Model_ceebCodes->edit_ceeb_code(Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 14:59:14 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '880000' for key 'PRIMARY' [ UPDATE `ceeb_codes` SET `ceeb_code` = '880000', `high_school_name` = 'BALBOA ACADEMo' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 14:59:14 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `ceeb_co...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(19): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(56): Model_ceebCodes->edit_ceeb_code(Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 15:02:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: columns ~ APPPATH/classes/Model/ceebCodes.php [ 10 ] in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:10
2012-12-11 15:02:58 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 10, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(28): Model_ceebCodes->add_ceeb_code(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:10
2012-12-11 15:04:08 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Model/ceebCodes.php [ 11 ] in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:11
2012-12-11 15:04:08 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(11): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 11, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(28): Model_ceebCodes->add_ceeb_code(Array)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Model/ceebCodes.php:11
2012-12-11 18:34:44 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant r - assumed 'r' ~ APPPATH/classes/Controller/Codes.php [ 73 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:73
2012-12-11 18:34:44 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(73): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/Breaki...', 73, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:73
2012-12-11 18:35:20 --- EMERGENCY: ErrorException [ 2 ]: fopen(/BreakingSoft/media/files): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Codes.php [ 73 ] in :
2012-12-11 18:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Breaking...', '/var/www/Breaki...', 73, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(73): fopen('/BreakingSoft/m...', 'r')
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-11 18:35:48 --- EMERGENCY: ErrorException [ 2 ]: fopen(/BreakingSoft/media/files/CEEB-DomesticHighSchoolsByState.xlsx): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Codes.php [ 73 ] in :
2012-12-11 18:35:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Breaking...', '/var/www/Breaki...', 73, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(73): fopen('/BreakingSoft/m...', 'r')
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-11 18:39:01 --- EMERGENCY: ErrorException [ 2 ]: fopen(/BreakingSoft/media/files/CEEB-DomesticHighSchoolsByState.xlsx): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Codes.php [ 73 ] in :
2012-12-11 18:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Breaking...', '/var/www/Breaki...', 73, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(73): fopen('/BreakingSoft/m...', 'r')
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-11 18:40:41 --- EMERGENCY: ErrorException [ 2 ]: fopen(/BreakingSoft/media/files/CEEB-DomesticHighSchoolsByState.xlsx): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Codes.php [ 73 ] in :
2012-12-11 18:40:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Breaking...', '/var/www/Breaki...', 73, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(73): fopen('/BreakingSoft/m...', 'r')
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-11 18:40:44 --- EMERGENCY: ErrorException [ 2 ]: fopen(/BreakingSoft/media/files/CEEB-DomesticHighSchoolsByState.xlsx): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Codes.php [ 73 ] in :
2012-12-11 18:40:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(/Breaking...', '/var/www/Breaki...', 73, Array)
#1 /var/www/BreakingSoft/application/classes/Controller/Codes.php(73): fopen('/BreakingSoft/m...', 'r')
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in :
2012-12-11 18:46:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'PHPExcel_IOFactory' not found ~ APPPATH/classes/Controller/Codes.php [ 74 ] in :
2012-12-11 18:46:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 18:50:42 --- EMERGENCY: ErrorException [ 2 ]: feof() expects parameter 1 to be resource, null given ~ APPPATH/views/pages/lookup.php [ 13 ] in :
2012-12-11 18:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'feof() expects ...', '/var/www/Breaki...', 13, Array)
#1 /var/www/BreakingSoft/application/views/pages/lookup.php(13): feof(NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/BreakingSoft/application/views/template.php(39): Kohana_View->__toString()
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/BreakingSoft/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#10 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#16 {main} in :
2012-12-11 18:50:43 --- EMERGENCY: ErrorException [ 2 ]: feof() expects parameter 1 to be resource, null given ~ APPPATH/views/pages/lookup.php [ 13 ] in :
2012-12-11 18:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'feof() expects ...', '/var/www/Breaki...', 13, Array)
#1 /var/www/BreakingSoft/application/views/pages/lookup.php(13): feof(NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/BreakingSoft/application/views/template.php(39): Kohana_View->__toString()
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/BreakingSoft/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#10 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#16 {main} in :
2012-12-11 19:57:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'PHPExcel' not found ~ SYSPATH/classes/PHPExcel/Reader/Excel2007.php [ 491 ] in :
2012-12-11 19:57:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 20:00:04 --- EMERGENCY: ErrorException [ 1 ]: Class 'PHPExcel' not found ~ APPPATH/classes/Controller/Codes.php [ 75 ] in :
2012-12-11 20:00:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 20:18:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'PHPExcel_Reader_media/files/CEEB-DomesticHighSchoolsByState.xlsx' not found ~ SYSPATH/classes/PHPExcel/IOFactory.php [ 170 ] in :
2012-12-11 20:18:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 20:59:12 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate interface PHPExcel_Reader_IReadFilter ~ APPPATH/classes/Controller/Codes.php [ 79 ] in :
2012-12-11 20:59:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 21:23:28 --- EMERGENCY: Exception [ 0 ]: Could not open /media/files/CEEB-DomesticHighSchoolsByState.xlsx for reading! File does not exist. ~ SYSPATH/classes/PHPExcel/Reader/Excel2007.php [ 487 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:90
2012-12-11 21:23:28 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(90): PHPExcel_Reader_Excel2007->load('/media/files/CE...')
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:90
2012-12-11 21:25:04 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ APPPATH/classes/Controller/Codes.php [ 118 ] in :
2012-12-11 21:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 21:25:17 --- EMERGENCY: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH/classes/PHPExcel/Cell.php [ 531 ] in :
2012-12-11 21:25:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 21:29:31 --- EMERGENCY: ErrorException [ 4096 ]: Object of class PHPExcel could not be converted to string ~ APPPATH/classes/Controller/Codes.php [ 93 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:93
2012-12-11 21:29:31 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(93): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/Breaki...', 93, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:93
2012-12-11 21:31:56 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Codes.php [ 94 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:94
2012-12-11 21:31:56 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(94): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 94, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:94
2012-12-11 21:31:56 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 1631441 bytes) ~ SYSPATH/classes/Kohana/Debug.php [ 230 ] in :
2012-12-11 21:31:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 21:32:26 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Codes.php [ 94 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:94
2012-12-11 21:32:26 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(94): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 94, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:94
2012-12-11 21:32:27 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 1631441 bytes) ~ SYSPATH/classes/Kohana/Debug.php [ 230 ] in :
2012-12-11 21:32:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 21:53:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: startRow ~ APPPATH/classes/Controller/Codes.php [ 90 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:90
2012-12-11 21:53:46 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(90): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 90, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:90
2012-12-11 22:05:11 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Codes.php [ 97 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:97
2012-12-11 22:05:11 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(97): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 97, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:97
2012-12-11 22:05:12 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 16384 bytes) ~ SYSPATH/classes/Kohana/Debug.php [ 234 ] in :
2012-12-11 22:05:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-11 22:06:31 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Codes.php [ 96 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:96
2012-12-11 22:06:31 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(96): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 96, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:96
2012-12-11 22:12:31 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Codes.php [ 96 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:96
2012-12-11 22:12:31 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(96): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 96, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:96
2012-12-11 22:14:44 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Codes.php [ 98 ] in /var/www/BreakingSoft/application/classes/Controller/Codes.php:98
2012-12-11 22:14:44 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Codes.php(98): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/Breaki...', 98, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Codes.php:98
2012-12-11 23:06:15 --- EMERGENCY: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `ceeb_codes` (`ceeb_code`, `high_school_name`) VALUES ('CEEB Code', 'High School Name', 'City', 'State', 'Zip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:06:15 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(12): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Controller/Codes.php(99): Model_ceebCodes->add_ceeb_code(Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:21:57 --- EMERGENCY: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `ceeb_codes` (`ceeb_code`, `high_school_name`, `city`, `state`, `zip`) VALUES ('CEEB Code', 'High School Name', 'City', 'State', 'Zip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:21:57 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(12): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(24): Model_ceebCodes->add_ceeb_code(Array)
#3 /var/www/BreakingSoft/application/classes/Controller/Codes.php(98): Model_ceebCodes->add_ceeb_code_by_associative_array(Array)
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:23:23 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `ceeb_codes` (`ceeb_code`, `high_school_name`, `city`, `state`, `zip`) VALUES ('CEEB Code', 'High School Name', 'City', 'State', 'Zip') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:23:23 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(12): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(26): Model_ceebCodes->add_ceeb_code(Array)
#3 /var/www/BreakingSoft/application/classes/Controller/Codes.php(98): Model_ceebCodes->add_ceeb_code_by_associative_array(Array)
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:25:41 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `ceeb_codes` (`ceeb_code`, `high_school_name`, `city`, `state`, `zip`) VALUES ('CEEB Code', 'High School Name', 'City', 'State', 'Zip') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251
2012-12-11 23:25:41 --- DEBUG: #0 /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ce...', false, Array)
#1 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(12): Kohana_Database_Query->execute()
#2 /var/www/BreakingSoft/application/classes/Model/ceebCodes.php(26): Model_ceebCodes->add_ceeb_code(Array)
#3 /var/www/BreakingSoft/application/classes/Controller/Codes.php(98): Model_ceebCodes->add_ceeb_code_by_associative_array(Array)
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Codes->action_lookup()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Codes))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/modules/database/classes/Kohana/Database/Query.php:251