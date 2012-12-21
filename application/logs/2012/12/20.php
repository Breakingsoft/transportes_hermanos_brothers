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