<?php
	
	class Router {
		
		function __construct($routes) {
			/**
			 * Get the requested uri and search for it against the $routes array, 
			 * displaying the corresponding file if possible
			 *
			 * @param array $routes
			 */
			$uri = isset($_GET['uri']) ? '/' . trim($_GET['uri'], '/') : '/';
			foreach ($routes as $key => $value) {
				if ($key === $uri) {
					if (file_exists($value)) {
						require_once $value;
						exit();
					} else {
						echo "<h1>The requested file exists but could not be found.</h1>";
						exit();
					}
				}
			}
			echo "<h1>404 File not found</h1>";
			exit();
		}
	}