<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// Ricardo
$routes->get('/salir', 'Home::index');

// Rutas Tabla Producto

$routes->add('/productos', 'productoController::productos');
// Crear
$routes->get('crear', 'productoController::crear');
// Guardar
$routes->post('guardar', 'productoController::guardar');
//Eliminar
$routes->get('borrar/(:num)', 'productoController::borrar/$1');
//Editar
$routes->get('editar/(:num)','productoController::editar/$1');
//Actualizar
$routes->post('actualizar', 'productoController::actualizar');


//Rutas Tabla Herramienta

$routes->add('/herramientas', 'herramientasController::herramientas');
// Crear
$routes->get('crearHerr', 'herramientasController::crearHerr');
// Guardar
$routes->post('guardarH', 'herramientasController::guardarH');
//Eliminar
$routes->get('borrarHerr/(:num)', 'herramientasController::borrarHerr/$1');
//Editar
$routes->get('editarHerr/(:num)', 'herramientasController::editarHerr/$1');
//Actualizar
$routes->post('actualizarHerr', 'herramientasController::actualizarHerr');



//Ruta Usuario
//Usuario
$routes->add('/','/home::index');

// Registro
$routes->add('/registro', 'registrarController::registro');


//Rutas Tabla Bodega
//Bodega
$routes->add('/bodegas', 'bodegaController::bodegas');
//Crear
$routes->get('crear_bodega', 'bodegaController::crear_bodega');
//Guardar
$routes->post('guardar_bodega', 'bodegaController::guardar_bodega');
//Eliminar
$routes->get('borrar_bodega/(:num)', 'bodegaController::borrar_bodega/$1');
//Editar
$routes->get('editar_bodega/(:num)', 'bodegaController::editar_bodega/$1');
//Actualizar
$routes->post('actualizar_bodega', 'bodegaController::actualizar_bodega');



//Proyectos
$routes->add('/proyectos', 'proyectoController::proyectos');
//Crear
$routes->get('crear_proyectos', 'proyectoController::crear_proyectos');
//Guardar
$routes->post('guardar_proyecto', 'proyectoController::guardar_proyecto');
//Eliminar
$routes->get('/borrar_proyecto/(:num)', 'proyectoController::borrar_proyecto/$1');
//Editar
$routes->get('editar_proyecto/(:num)', 'proyectoController::editar_proyecto/$1');
//Actualizar
$routes->post('actualizar_proyecto', 'proyectoController::actualizar_proyecto');

//Eliminar metodo 2 para modal
// $routes->delete('/borrar_proyecto/(:num)', 'proyectoController::borrar_proyecto/$1');






/* $routes->get('/', 'SignupController::index'); */
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
