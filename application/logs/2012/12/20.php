<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-20 10:54:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/template.php [ 4 ] in /var/www/transportes-hermanos-brothers/application/views/template.php:4
2012-12-20 10:54:41 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/template.php(4): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/transp...', 4, Array)
#1 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#2 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/transportes-hermanos-brothers/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/transportes-hermanos-brothers/application/views/template.php:4
2012-12-20 22:41:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sugerencia_mudanza ~ APPPATH/views/pages/sugerencia_mudanza.php [ 3 ] in /var/www/transportes-hermanos-brothers/application/views/pages/sugerencia_mudanza.php:3
2012-12-20 22:41:28 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/pages/sugerencia_mudanza.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/transp...', 3, Array)
#1 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#2 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/transportes-hermanos-brothers/application/views/template.php(74): Kohana_View->__toString()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#6 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/transportes-hermanos-brothers/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#9 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/transportes-hermanos-brothers/application/views/pages/sugerencia_mudanza.php:3
2012-12-20 22:41:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sugerencia_mudanza ~ APPPATH/views/pages/sugerencia_mudanza.php [ 3 ] in /var/www/transportes-hermanos-brothers/application/views/pages/sugerencia_mudanza.php:3
2012-12-20 22:41:28 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/pages/sugerencia_mudanza.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/transp...', 3, Array)
#1 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#2 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/transportes-hermanos-brothers/application/views/template.php(74): Kohana_View->__toString()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#6 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/transportes-hermanos-brothers/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#9 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/transportes-hermanos-brothers/application/views/pages/sugerencia_mudanza.php:3
2012-12-20 22:43:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra aucto' at line 1 [ INSERT INTO `company_info` (`name`, `id`, `mudanzas`, `sugerencia_mudanza`, `phone_1`, `phone_2`, `email_1`, `email_2`, `about_us`, `logo_image_id`, `address`, `our_service`, `turismo_info`) VALUES ('Transportes Hermanos Brothers S.A.', '9-123-456-789', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra auctor turpis eget fermentum. Pellentesque vehicula sollicitudin turpis. Pellentesque dui nulla, sollicitudin at dignissim quis, accumsan sed elit. Donec eget urna sed nunc accumsan viverra. Suspendisse a aliquam est. Maecenas pretium nibh accumsan leo ultricies sagittis. Quisque rutrum elementum cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id eros libero, at ultrices eros. Mauris ut lacus eros, eget vulputate lorem. Nullam pellentesque elementum justo vitae feugiat. Integer vitae nulla sed arcu tempor gravida. Sed ipsum nisi, dignissim quis aliquet eu, aliquet non augue. Integer eu purus sem, a tincidunt nulla.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra auctor turpis eget fermentum. Pellentesque vehicula sollicitudin turpis. Pellentesque dui nulla, sollicitudin at dignissim quis, accumsan sed elit. Donec eget urna sed nunc accumsan viverra. Suspendisse a aliquam est. Maecenas pretium nibh accumsan leo ultricies sagittis. Quisque rutrum elementum cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id eros libero, at ultrices eros. Mauris ut lacus eros, eget vulputate lorem. Nullam pellentesque elementum justo vitae feugiat. Integer vitae nulla sed arcu tempor gravida. Sed ipsum nisi, dignissim quis aliquet eu, aliquet non augue. Integer eu purus sem, a tincidunt nulla.', '85089959', '', 'icjlkBrWbE/686eS87iqWovlnD0n+lwVhKBd2/96LPddzA==', 'TzPSjDvCz0Edplf2AiNceA==', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra auctor turpis eget fermentum. Pellentesque vehicula sollicitudin turpis. Pellentesque dui nulla, sollicitudin at dignissim quis, accumsan sed elit. Donec eget urna sed nunc accumsan viverra. Suspendisse a aliquam est. Maecenas pretium nibh accumsan leo ultricies sagittis. Quisque rutrum elementum cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id eros libero, at ultrices eros. Mauris ut lacus eros, eget vulputate lorem. Nullam pellentesque elementum justo vitae feugiat. Integer vitae nulla sed arcu tempor gravida. Sed ipsum nisi, dignissim quis aliquet eu, aliquet non augue. Integer eu purus sem, a tincidunt nulla.', (), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra auctor turpis eget fermentum. Pellentesque vehicula sollicitudin turpis. Pellentesque dui nulla, sollicitudin at dignissim quis, accumsan sed elit. Donec eget urna sed nunc accumsan viverra. Suspendisse a aliquam est. Maecenas pretium nibh accumsan leo ultricies sagittis. Quisque rutrum elementum cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id eros libero, at ultrices eros. Mauris ut lacus eros, eget vulputate lorem. Nullam pellentesque elementum justo vitae feugiat. Integer vitae nulla sed arcu tempor gravida. Sed ipsum nisi, dignissim quis aliquet eu, aliquet non augue. Integer eu purus sem, a tincidunt nulla.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin viverra auctor turpis eget fermentum. Pellentesque vehicula sollicitudin turpis. Pellentesque dui nulla, sollicitudin at dignissim quis, accumsan sed elit. Donec eget urna sed nunc accumsan viverra. Suspendisse a aliquam est. Maecenas pretium nibh accumsan leo ultricies sagittis. Quisque rutrum elementum cursus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut id eros libero, at ultrices eros. Mauris ut lacus eros, eget vulputate lorem. Nullam pellentesque elementum justo vitae feugiat. Integer vitae nulla sed arcu tempor gravida. Sed ipsum nisi, dignissim quis aliquet eu, aliquet non augue. Integer eu purus sem, a tincidunt nulla.', 'Mauris ut lacus eros, eget vulputate lorem. Nullam pellentesque elementum justo vitae feugiat. Integer vitae nulla sed arcu tempor gravida. Sed ipsum nisi, dignissim quis aliquet eu, aliquet non augue. Integer eu purus sem, a tincidunt nulla.') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/transportes-hermanos-brothers/modules/database/classes/Kohana/Database/Query.php:251
2012-12-20 22:43:21 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /var/www/transportes-hermanos-brothers/application/classes/Model/companyInfo.php(46): Kohana_Database_Query->execute()
#2 /var/www/transportes-hermanos-brothers/application/classes/Controller/Static.php(56): Model_companyInfo->add_company_info(Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(84): Controller_Static->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/transportes-hermanos-brothers/modules/database/classes/Kohana/Database/Query.php:251
2012-12-20 22:44:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/views/template.php [ 5 ] in /var/www/transportes-hermanos-brothers/application/views/template.php:5
2012-12-20 22:44:42 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/template.php(5): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/transp...', 5, Array)
#1 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#2 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/transportes-hermanos-brothers/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#8 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#11 {main} in /var/www/transportes-hermanos-brothers/application/views/template.php:5
2012-12-20 22:45:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: turismo_info ~ APPPATH/views/pages/turismo.php [ 7 ] in /var/www/transportes-hermanos-brothers/application/views/pages/turismo.php:7
2012-12-20 22:45:18 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/pages/turismo.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/transp...', 7, Array)
#1 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#2 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/transportes-hermanos-brothers/application/views/template.php(74): Kohana_View->__toString()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#6 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/transportes-hermanos-brothers/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#9 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/transportes-hermanos-brothers/application/views/pages/turismo.php:7
2012-12-20 22:45:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: turismo_info ~ APPPATH/views/pages/turismo.php [ 7 ] in /var/www/transportes-hermanos-brothers/application/views/pages/turismo.php:7
2012-12-20 22:45:18 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/pages/turismo.php(7): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/transp...', 7, Array)
#1 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#2 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#3 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/transportes-hermanos-brothers/application/views/template.php(74): Kohana_View->__toString()
#5 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(61): include('/var/www/transp...')
#6 /var/www/transportes-hermanos-brothers/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/transp...', Array)
#7 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/transportes-hermanos-brothers/application/classes/Controller/Main.php(39): Kohana_Controller_Template->after()
#9 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/transportes-hermanos-brothers/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/transportes-hermanos-brothers/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/transportes-hermanos-brothers/application/views/pages/turismo.php:7