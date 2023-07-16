 <?php

/**
 * Front controller
 */

/**
 * Twig
 */

 //require_once '/path/to/vendor/autoload.php';
 //require_once dirname(__DIR__) . '/vendor/vendor/autoload.php';

require '../vendor/vendor/autoload.php';
/**
 * Autoloader
 */
spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);   // get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->add('try/{controller}/{action}', ['namespace' => 'Try']); 
// you add the url (how it looks in the browser == the pattern of the path)
    
$router->dispatch($_SERVER['QUERY_STRING']);
