<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-23 09:56:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/pages/delete_image.php [ 9 ] in /var/www/transportes-hermanos-brothers/application/views/pages/delete_image.php:9
2012-12-23 09:56:36 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/pages/delete_image.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/transp...', 9, Array)
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
#15 {main} in /var/www/transportes-hermanos-brothers/application/views/pages/delete_image.php:9
2012-12-23 09:56:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/pages/delete_image.php [ 9 ] in /var/www/transportes-hermanos-brothers/application/views/pages/delete_image.php:9
2012-12-23 09:56:36 --- DEBUG: #0 /var/www/transportes-hermanos-brothers/application/views/pages/delete_image.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/transp...', 9, Array)
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
#15 {main} in /var/www/transportes-hermanos-brothers/application/views/pages/delete_image.php:9