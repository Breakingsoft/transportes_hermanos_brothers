<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-10 16:26:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Template' not found ~ APPPATH/classes/Controller/Template.php [ 3 ] in :
2012-12-10 16:26:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-10 16:31:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:31:45 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/BreakingSoft/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#8 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /var/www/BreakingSoft/application/classes/Controller/Home.php(14): Kohana_View::factory(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:31:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:31:45 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 [internal function]: Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#10 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#12 /var/www/BreakingSoft/application/classes/Controller/Home.php(14): Kohana_View::factory(Object(View))
#13 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#16 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:31:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	View_Exception [ 0 ]: The requested view pages/norma_content could not be found
	
		SYSPATH/classes/Kohana/View.php [ 257 ]
		252 	 */
253 	public function set_filename($file)
254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
		
					
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/views/pages/template.php [ 23 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													18                     &lt;?php echo View::factory('pages/main_menu') ?&gt;
19 
20                     &lt;div id="content"&gt;
21 
22                             &lt;!-- mostramos el normal content --&gt;
23                             &lt;?php echo View::factory('pages/norma_content')?&gt;
24 
25                             &lt;div class="divider1"&gt;&lt;/div&gt;
26                             &lt;!-- mostramos el primary content --&gt;
27                             &lt;?php echo $content; ?&gt;
28 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Home.php [ 14 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													 9             //code here
10         }
11 
12         public function action_index()
13 	{
14             $template = View::factory($this-&gt;template);
15             $this-&gt;template-&gt;content = $template;
16 	}
17         
18         public function after(){
19             //code here

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 84 ]
											
					&raquo;
					Controller_Home->action_index()
				
													79 				array(':uri' =&gt; $this-&gt;request-&gt;uri())
80 			)-&gt;request($this-&gt;request);
81 		}
82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Home(4) {
    public template => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(4) "home"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(4) "Home"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Home"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(4) "home"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(4) "Home"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (64)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Home.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/pages/template.php
				
								
					APPPATH/views/pages/header.php
				
								
					APPPATH/views/pages/main_menu.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					mcrypt
				
								
					mhash
				
								
					xdebug
				
							
		
																$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_USER_AGENT
					string(104) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.8"
				
								
					HTTP_ACCEPT_CHARSET
					string(30) "ISO-8859-1,utf-8;q=0.7,*;q=0.3"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(8) "/var/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(31) "/var/www/BreakingSoft/index.php"
				
								
					REMOTE_PORT
					string(5) "59994"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(23) "/BreakingSoft/index.php"
				
								
					SCRIPT_NAME
					string(23) "/BreakingSoft/index.php"
				
								
					PHP_SELF
					string(23) "/BreakingSoft/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1355178705.613
				
								
					REQUEST_TIME
					integer 1355178705
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:31:45 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Home.php(14): Kohana_View::factory(Object(View))
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:43:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:43:09 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/BreakingSoft/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#8 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:43:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:43:09 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 [internal function]: Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#10 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#12 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#13 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#16 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:43:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	View_Exception [ 0 ]: The requested view pages/norma_content could not be found
	
		SYSPATH/classes/Kohana/View.php [ 257 ]
		252 	 */
253 	public function set_filename($file)
254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
		
					
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/views/pages/template.php [ 23 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													18                     &lt;?php echo View::factory('pages/main_menu') ?&gt;
19 
20                     &lt;div id="content"&gt;
21 
22                             &lt;!-- mostramos el normal content --&gt;
23                             &lt;?php echo View::factory('pages/norma_content')?&gt;
24 
25                             &lt;div class="divider1"&gt;&lt;/div&gt;
26                             &lt;!-- mostramos el primary content --&gt;
27                             &lt;?php echo $content; ?&gt;
28 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Main.php [ 10 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													 5     public $template = 'pages/template';
 6     
 7         public function before(){
 8             parent::before();
 9             
10             $template = View::factory($this-&gt;template);
11             $this-&gt;template-&gt;content = $template;
12         }
13        public function after(){
14             //code here
15             parent::after();

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Main->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Static(4) {
    public template => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(6) "Static"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(6) "Static"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (65)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Static.php
				
								
					APPPATH/classes/Controller/Main.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/pages/template.php
				
								
					APPPATH/views/pages/header.php
				
								
					APPPATH/views/pages/main_menu.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					mcrypt
				
								
					mhash
				
								
					xdebug
				
							
		
																$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_USER_AGENT
					string(104) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.8"
				
								
					HTTP_ACCEPT_CHARSET
					string(30) "ISO-8859-1,utf-8;q=0.7,*;q=0.3"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(8) "/var/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(31) "/var/www/BreakingSoft/index.php"
				
								
					REMOTE_PORT
					string(5) "59996"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(23) "/BreakingSoft/index.php"
				
								
					SCRIPT_NAME
					string(23) "/BreakingSoft/index.php"
				
								
					PHP_SELF
					string(23) "/BreakingSoft/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1355179389.892
				
								
					REQUEST_TIME
					integer 1355179389
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:43:09 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:00 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/BreakingSoft/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#8 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:00 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 [internal function]: Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#10 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#12 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#13 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#16 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	View_Exception [ 0 ]: The requested view pages/norma_content could not be found
	
		SYSPATH/classes/Kohana/View.php [ 257 ]
		252 	 */
253 	public function set_filename($file)
254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
		
					
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/views/pages/template.php [ 23 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													18                     &lt;?php echo View::factory('pages/main_menu') ?&gt;
19 
20                     &lt;div id="content"&gt;
21 
22                             &lt;!-- mostramos el normal content --&gt;
23                             &lt;?php echo View::factory('pages/norma_content')?&gt;
24 
25                             &lt;div class="divider1"&gt;&lt;/div&gt;
26                             &lt;!-- mostramos el primary content --&gt;
27                             &lt;?php echo $content; ?&gt;
28 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Main.php [ 10 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													 5     public $template = 'pages/template';
 6     
 7         public function before(){
 8             parent::before();
 9             
10             $template = View::factory($this-&gt;template);
11             $this-&gt;template-&gt;content = $template;
12         }
13        public function after(){
14             //code here
15             parent::after();

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Main->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Static(4) {
    public template => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(6) "Static"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(6) "Static"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (65)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Static.php
				
								
					APPPATH/classes/Controller/Main.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/pages/template.php
				
								
					APPPATH/views/pages/header.php
				
								
					APPPATH/views/pages/main_menu.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					mcrypt
				
								
					mhash
				
								
					xdebug
				
							
		
																$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_USER_AGENT
					string(104) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.8"
				
								
					HTTP_ACCEPT_CHARSET
					string(30) "ISO-8859-1,utf-8;q=0.7,*;q=0.3"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(8) "/var/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(31) "/var/www/BreakingSoft/index.php"
				
								
					REMOTE_PORT
					string(5) "59998"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(14) "/BreakingSoft/"
				
								
					SCRIPT_NAME
					string(23) "/BreakingSoft/index.php"
				
								
					PHP_SELF
					string(23) "/BreakingSoft/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1355179440.087
				
								
					REQUEST_TIME
					integer 1355179440
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:00 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:04 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/BreakingSoft/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#8 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:04 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 [internal function]: Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#10 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#12 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#13 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#16 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	View_Exception [ 0 ]: The requested view pages/norma_content could not be found
	
		SYSPATH/classes/Kohana/View.php [ 257 ]
		252 	 */
253 	public function set_filename($file)
254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
		
					
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/views/pages/template.php [ 23 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													18                     &lt;?php echo View::factory('pages/main_menu') ?&gt;
19 
20                     &lt;div id="content"&gt;
21 
22                             &lt;!-- mostramos el normal content --&gt;
23                             &lt;?php echo View::factory('pages/norma_content')?&gt;
24 
25                             &lt;div class="divider1"&gt;&lt;/div&gt;
26                             &lt;!-- mostramos el primary content --&gt;
27                             &lt;?php echo $content; ?&gt;
28 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Main.php [ 10 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													 5     public $template = 'pages/template';
 6     
 7         public function before(){
 8             parent::before();
 9             
10             $template = View::factory($this-&gt;template);
11             $this-&gt;template-&gt;content = $template;
12         }
13        public function after(){
14             //code here
15             parent::after();

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Main->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Static(4) {
    public template => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(6) "Static"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(6) "Static"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (65)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Static.php
				
								
					APPPATH/classes/Controller/Main.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/pages/template.php
				
								
					APPPATH/views/pages/header.php
				
								
					APPPATH/views/pages/main_menu.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					mcrypt
				
								
					mhash
				
								
					xdebug
				
							
		
																$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					HTTP_USER_AGENT
					string(104) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.8"
				
								
					HTTP_ACCEPT_CHARSET
					string(30) "ISO-8859-1,utf-8;q=0.7,*;q=0.3"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(8) "/var/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(31) "/var/www/BreakingSoft/index.php"
				
								
					REMOTE_PORT
					string(5) "59999"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(14) "/BreakingSoft/"
				
								
					SCRIPT_NAME
					string(23) "/BreakingSoft/index.php"
				
								
					PHP_SELF
					string(23) "/BreakingSoft/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1355179444.182
				
								
					REQUEST_TIME
					integer 1355179444
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:44:04 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:27 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/BreakingSoft/application/classes/Controller/Main.php(15): Kohana_Controller_Template->after()
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#10 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:49 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /var/www/BreakingSoft/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#8 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#14 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:49 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/pages/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 [internal function]: Kohana_View->__toString()
#7 /var/www/BreakingSoft/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#8 /var/www/BreakingSoft/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#9 /var/www/BreakingSoft/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#10 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#11 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#12 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#13 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#16 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	View_Exception [ 0 ]: The requested view pages/norma_content could not be found
	
		SYSPATH/classes/Kohana/View.php [ 257 ]
		252 	 */
253 	public function set_filename($file)
254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
		
					
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/views/pages/template.php [ 23 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							string(19) "pages/norma_content"
						
										
				
													18                     &lt;?php echo View::factory('pages/main_menu') ?&gt;
19 
20                     &lt;div id="content"&gt;
21 
22                             &lt;!-- mostramos el normal content --&gt;
23                             &lt;?php echo View::factory('pages/norma_content')?&gt;
24 
25                             &lt;div class="divider1"&gt;&lt;/div&gt;
26                             &lt;!-- mostramos el primary content --&gt;
27                             &lt;?php echo $content; ?&gt;
28 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Main.php [ 10 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
    protected _data => array(0) 
}
						
										
				
													 5     public $template = 'pages/template';
 6     
 7         public function before(){
 8             parent::before();
 9             
10             $template = View::factory($this-&gt;template);
11             $this-&gt;template-&gt;content = $template;
12         }
13        public function after(){
14             //code here
15             parent::after();

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Main->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Static(4) {
    public template => object View(2) {
        protected _file => string(58) "/var/www/BreakingSoft/application/views/pages/template.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(6) "Static"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(6) "Static"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(0) 
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => NULL
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(6) "Static"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(6) "Static"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(0) 
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (65)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Static.php
				
								
					APPPATH/classes/Controller/Main.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					APPPATH/views/pages/template.php
				
								
					APPPATH/views/pages/header.php
				
								
					APPPATH/views/pages/main_menu.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					mcrypt
				
								
					mhash
				
								
					xdebug
				
							
		
																$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(8) "no-cache"
				
								
					HTTP_PRAGMA
					string(8) "no-cache"
				
								
					HTTP_USER_AGENT
					string(104) "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_ENCODING
					string(17) "gzip,deflate,sdch"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.8"
				
								
					HTTP_ACCEPT_CHARSET
					string(30) "ISO-8859-1,utf-8;q=0.7,*;q=0.3"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(8) "/var/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(31) "/var/www/BreakingSoft/index.php"
				
								
					REMOTE_PORT
					string(5) "60003"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(14) "/BreakingSoft/"
				
								
					SCRIPT_NAME
					string(23) "/BreakingSoft/index.php"
				
								
					PHP_SELF
					string(23) "/BreakingSoft/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1355179549.296
				
								
					REQUEST_TIME
					integer 1355179549
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:45:49 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(10): Kohana_View::factory(Object(View))
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:46:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:46:15 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:16 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:16 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:17 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:17 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:19 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:20 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:20 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:20 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:42 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:43 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:43 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:43 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:44 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:44 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:44 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:51 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:56 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:56 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:48:56 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:49:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:49:24 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:51:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view /BreakingSoft/pages/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:51:18 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/BreakingSoft/p...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('/BreakingSoft/p...', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(8): Kohana_View::factory('/BreakingSoft/p...')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:52:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:52:09 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:53:05 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/BreakingSoft/system/classes/Kohana/Cookie.php:67
2012-12-10 16:53:05 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 /var/www/BreakingSoft/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 /var/www/BreakingSoft/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/BreakingSoft/system/classes/Kohana/Cookie.php:67
2012-12-10 16:55:20 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:55:20 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:56:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view /BreakingSoft/pages/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:56:59 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/BreakingSoft/p...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('/BreakingSoft/p...', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(8): Kohana_View::factory('/BreakingSoft/p...')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:57:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/norma_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:57:22 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/norma_con...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/norma_con...', NULL)
#2 /var/www/BreakingSoft/application/views/template.php(23): Kohana_View::factory('pages/norma_con...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/BreakingSoft/application/classes/Controller/Main.php(13): Kohana_Controller_Template->after()
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#10 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:57:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/secundary_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:57:50 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/secundary...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/secundary...', NULL)
#2 /var/www/BreakingSoft/application/views/template.php(30): Kohana_View::factory('pages/secundary...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/BreakingSoft/application/classes/Controller/Main.php(13): Kohana_Controller_Template->after()
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#10 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:58:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/secondary_content could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:58:05 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/secondary...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/secondary...', NULL)
#2 /var/www/BreakingSoft/application/views/template.php(30): Kohana_View::factory('pages/secondary...')
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#4 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#5 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#6 /var/www/BreakingSoft/application/classes/Controller/Main.php(13): Kohana_Controller_Template->after()
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#10 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:59:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:59:34 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/BreakingSoft/application/classes/Controller/Main.php(6): Kohana_Controller_Template->before()
#4 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:59:54 --- EMERGENCY: View_Exception [ 0 ]: The requested view pages/template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 16:59:54 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('pages/template')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('pages/template', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Main.php(8): Kohana_View::factory('pages/template')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(69): Controller_Main->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 18:00:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: site_information ~ APPPATH/views/pages/footer.php [ 2 ] in /var/www/BreakingSoft/application/views/pages/footer.php:2
2012-12-10 18:00:17 --- DEBUG: #0 /var/www/BreakingSoft/application/views/pages/footer.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 2, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/BreakingSoft/application/views/template.php(35): Kohana_View->__toString()
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/BreakingSoft/application/classes/Controller/Main.php(15): Kohana_Controller_Template->after()
#9 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/BreakingSoft/application/views/pages/footer.php:2
2012-12-10 18:03:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: hero_images ~ APPPATH/views/pages/header.php [ 11 ] in /var/www/BreakingSoft/application/views/pages/header.php:11
2012-12-10 18:03:09 --- DEBUG: #0 /var/www/BreakingSoft/application/views/pages/header.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 11, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/BreakingSoft/application/views/template.php(17): Kohana_View->__toString()
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/BreakingSoft/application/classes/Controller/Main.php(15): Kohana_Controller_Template->after()
#9 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/BreakingSoft/application/views/pages/header.php:11
2012-12-10 18:33:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/pages/primary_content.php [ 35 ] in :
2012-12-10 18:33:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2012-12-10 18:48:53 --- EMERGENCY: Kohana_Exception [ 0 ]: No encryption key is defined in the encryption configuration group: default ~ SYSPATH/classes/Kohana/Encrypt.php [ 68 ] in /var/www/BreakingSoft/application/classes/Controller/Static.php:11
2012-12-10 18:48:53 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Static.php(11): Kohana_Encrypt::instance()
#1 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Static->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/BreakingSoft/application/classes/Controller/Static.php:11
2012-12-10 19:01:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: site_information_data ~ APPPATH/views/templates/header.php [ 4 ] in /var/www/BreakingSoft/application/views/templates/header.php:4
2012-12-10 19:01:10 --- DEBUG: #0 /var/www/BreakingSoft/application/views/templates/header.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/Breaki...', 4, Array)
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#2 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#3 /var/www/BreakingSoft/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/BreakingSoft/application/views/template.php(17): Kohana_View->__toString()
#5 /var/www/BreakingSoft/system/classes/Kohana/View.php(61): include('/var/www/Breaki...')
#6 /var/www/BreakingSoft/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/Breaki...', Array)
#7 /var/www/BreakingSoft/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/BreakingSoft/application/classes/Controller/Main.php(22): Kohana_Controller_Template->after()
#9 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#12 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/BreakingSoft/application/views/templates/header.php:4
2012-12-10 19:39:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view account/login_form could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 19:39:38 --- DEBUG: #0 /var/www/BreakingSoft/system/classes/Kohana/View.php(137): Kohana_View->set_filename('account/login_f...')
#1 /var/www/BreakingSoft/system/classes/Kohana/View.php(30): Kohana_View->__construct('account/login_f...', NULL)
#2 /var/www/BreakingSoft/application/classes/Controller/Static.php(80): Kohana_View::factory('account/login_f...')
#3 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Static->action_user_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/BreakingSoft/system/classes/Kohana/View.php:137
2012-12-10 21:01:22 --- EMERGENCY: Kohana_Exception [ 0 ]: Directory DOCROOT/media/images/ must be writable ~ SYSPATH/classes/Kohana/Upload.php [ 80 ] in /var/www/BreakingSoft/application/classes/Controller/Static.php:144
2012-12-10 21:01:22 --- DEBUG: #0 /var/www/BreakingSoft/application/classes/Controller/Static.php(144): Kohana_Upload::save(Array, NULL, '/var/www/Breaki...')
#1 /var/www/BreakingSoft/application/classes/Controller/Static.php(39): Controller_Static->_save_image(Array, 180, 180)
#2 /var/www/BreakingSoft/system/classes/Kohana/Controller.php(84): Controller_Static->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/BreakingSoft/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Static))
#5 /var/www/BreakingSoft/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/BreakingSoft/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/BreakingSoft/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/BreakingSoft/application/classes/Controller/Static.php:144