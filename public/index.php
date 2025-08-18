<?php

// Importando as classes necessárias
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

// Define o tempo de início da aplicação
define('LARAVEL_START', microtime(true));

// Determina se a aplicação está em modo de manutenção...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Registra o autoloader do Composer...
require __DIR__ . '/../vendor/autoload.php';

// Inicializa o Laravel e manipula a requisição...
/** @var Application $app */
$app = require __DIR__ . '/../bootstrap/app.php';

// Manipula a requisição atual
$app->handleRequest(Request::capture());
