<?PHP 
use Controller\PaginasController;
use MVC\Router;

$router = new Router;


$router->get('/admin',[PaginasController::class, 'admin']);


$router->access();
