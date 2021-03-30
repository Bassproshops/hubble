<?PHP 
require_once '../config/app.php';

use Controllers\PaginasController;
use MVC\Router;


$router = new Router;

$router->get('/', [PaginasController::class, 'index']);
$router->get('/admin',[PaginasController::class, 'admin']);


$router->access();
