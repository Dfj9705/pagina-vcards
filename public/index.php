<?php
require_once __DIR__ . '/../includes/app.php';


use Controllers\ContactoController;
use Controllers\CotizadorController;
use MVC\Router;
use Controllers\AppController;
$router = new Router();
// $router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class, 'index']);
$router->get('/quienes-somos', [AppController::class, 'somos']);
$router->get('/mision-vision', [AppController::class, 'mision']);
$router->get('/servicios', [AppController::class, 'servicios']);
$router->get('/contacto', [AppController::class, 'contacto']);
$router->get('/biblioteca', [AppController::class, 'biblioteca']);
$router->get('/detalle', [AppController::class, 'detalle']);
$router->get('/activaciones', [AppController::class, 'activaciones']);
$router->get('/eventos-corporativos', [AppController::class, 'eventosCorporativos']);
$router->get('/decoracion-corporativa', [AppController::class, 'decoracionCorporativa']);
$router->get('/merchandasing-y-material-corporativo', [AppController::class, 'merchandasing']);
$router->get('/cotizador', [CotizadorController::class, 'index']);
$router->get('/galeria', [AppController::class, 'galeria']);

$router->post('/API/contacto/enviar', [ContactoController::class, 'enviar']);
$router->post('/API/cotizador/enviar', [CotizadorController::class, 'enviar']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
