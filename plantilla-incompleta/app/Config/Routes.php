<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');

// 1. RUTAS DE AUTENTICACIÓN DE USUARIO
    // 1.1 Definí la ruta para mostrar el formulario de registro
    // 1.2 Definí la ruta para procesar el formulario de registro
    // 1.3 Definí la ruta para mostrar el formulario de inicio de sesión
    // 1.4 Definí la ruta para procesar el formulario de inicio de sesión
    // 1.5 Definí la ruta para cerrar sesión