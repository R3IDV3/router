<?php
	
	include 'router.php';
	
	new Router(array(
		'/' => 'home.php',
		'/about' => 'about.php'
	));