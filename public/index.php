<?php
declare (strict_types=1);
require __DIR__ .'/../config/config.php';
spl_autoload_register(function($class){
    foreach([__DIR__.'/../core', __DIR__.'/../app/Controllers', __DIR__.'/../app/Models'] as $b){
        $f = $b . '/' . $class . '.php';
        if(file_exists($f)){
            require $f;
            return;
        }
    }
});
if (!is_dir(UPLOAD_DIR)){
    @mkdir(UPLOAD_DIR, 0777, true);
}

$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/' )), '/');
$router = new Router($basePath);

$router->get('/', [MensajeController::class, 'index']);
$router->get('/mensajes', [MensajeController::class, 'index']);
$router->get('/mensajes/create', [MensajeController::class, 'create']);
$router->post('/mensajes/store', [MensajeController::class, 'store']);
$router->get('/mensajes/show', [MensajeController::class, 'show']);
$router->get('/mesnajes/edit', [MensajeController::class, 'edit']);
$router->get('/mensajes/update', [MensajeController::class, 'update']);
$router->get('/mensajes/delete', [MensajeController::class, 'delete']);
$router->dispatch();