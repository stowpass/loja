<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
|	my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'principal';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['cliente'] = 'clientecontroller/index';
$route['cliente/salvar'] = 'clientecontroller/salvar';
$route['cliente/novo'] = 'clientecontroller/novo';
$route['cliente/editar/(:num)']= 'clientecontroller/editar/$1';
$route['cliente/atualizar/(:num)'] = 'clientecontroller/atualizar/$1';
$route['cliente/abrir/(:num)'] = 'clientecontroller/abrir/$1';
$route['cliente/excluir/(:num)'] = 'clientecontroller/excluir/$1';

$route['categoria'] = 'categoriacontroller/index';
$route['categoria/salvar'] = 'categoriacontroller/salvar';
$route['categoria/novo'] = 'categoriacontroller/novo';
$route['categoria/editar/(:num)']= 'categoriacontroller/editar/$1';
$route['categoria/atualizar/(:num)'] = 'categoriacontroller/atualizar/$1';
$route['categoria/abrir/(:num)'] = 'categoriacontroller/abrir/$1';
$route['categoria/excluir/(:num)'] = 'categoriacontroller/excluir/$1';

$route['categoriapai'] = 'categoriapaicontroller/index';
$route['categoriapai/salvar'] = 'categoriapaicontroller/salvar';
$route['categoriapai/novo'] = 'categoriapaicontroller/novo';
$route['categoriapai/editar/(:num)']= 'categoriapaicontroller/editar/$1';
$route['categoriapai/atualizar/(:num)'] = 'categoriapaicontroller/atualizar/$1';
$route['categoriapai/abrir/(:num)'] = 'categoriapaicontroller/abrir/$1';
$route['categoriapai/excluir/(:num)'] = 'categoriapaicontroller/excluir/$1';

//auth/create_user

$route['usuario/novo'] = 'auth/create_user';
$route['usuario'] = 'admin/login/index';
$route['usuario/verificar'] = 'usuariocontroller/verificar';
$route['usuario/logout'] = 'usuariocontroller/logout';



$route['usuario'] = 'usuariocontroller/index';
$route['usuario/verificar'] = 'usuariocontroller/verificar';
$route['usuario/logout'] = 'usuariocontroller/logout';

/*
$route['categoria'] = 'categoriacontroller/index';
$route['categoria/salvar'] = 'categoriacontroller/salvar';
$route['categoria/novo'] = 'categoriacontroller/novo';
$route['categoria/editar/(:num)']= 'categoriacontroller/editar/$1';
$route['categoria/atualizar/(:num)'] = 'categoriacontroller/atualizar/$1';
$route['categoria/abrir/(:num)'] = 'categoriacontroller/abrir/$1';
$route['categoria/excluir/(:num)'] = 'categoriacontroller/excluir/$1';
$route['categoria/json'] = 'categoriacontroller/json';
$route['categoria/json2'] = 'categoriacontroller/json2';
*/

$route['marca'] = 'marcacontroller/index';
$route['marca/salvar'] = 'marcacontroller/salvar';
$route['marca/novo'] = 'marcacontroller/novo';
$route['marca/editar/(:num)']= 'marcacontroller/editar/$1';
$route['marca/atualizar/(:num)'] = 'marcacontroller/atualizar/$1';
$route['marca/abrir/(:num)'] = 'marcacontroller/abrir/$1';
$route['marca/excluir/(:num)'] = 'marcacontroller/excluir/$1';