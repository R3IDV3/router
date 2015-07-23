# router
This is a simple PHP routing class. This is a scalable project, it's meant to be something you can just drop right into your site and use, but it's also meant to be a good foundation for building and understanding routing systems.
## Getting Started
1. Make sure you're using this on a server, since PHP won't work without one!  
If you need to install a server on your local machine, try [MAMP](https://www.mamp.info/).
2. Place `index.php`, `router.php`, and `.htaccess` in the directory which you wish to route.
3. An instance of router is initialized in `index.php` with an array containing the routes by using this syntax:  
```php
new Router(array(
	'/path-to-route' => 'file-to-route-to.php',
	'/another-path-to-route' => 'another-file-to-route-to.php',
	// etc
));
```
**It's that simple!**
