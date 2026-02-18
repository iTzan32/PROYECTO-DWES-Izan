<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/config.php';

$url = $_GET['url'] ?? 'home';
$url_components = explode('/', $url);
$page = $url_components[0]; 

switch($page) {
    case 'productos':
        $listado = [
            [
                'id' => 1, 
                'nombre' => 'Producto 1', 
                'descripcion' => 'AAAAAAAAAAAAAAAAA', 
                'precio' => 10.50, 
                'stock' => 5
            ],
            [
                'id' => 2, 
                'nombre' => '2 producto', 
                'descripcion' => null, 
                'precio' => 20.00, 
                'stock' => 0
            ]
        ];
        
        require 'views/productos.view.php';
        break;
        
    case 'login':
        echo "<h1>Formulario de Login</h1>"; 
        break;
        
    case 'home':
        require 'views/home.view.php';
        break;
        
    default:
        http_response_code(404);
        echo "<h1>Error 404 - Página no encontrada</h1>";
        break;
} 
?>