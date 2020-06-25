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

//auth/create_user

$route['usuario/novo'] = 'auth/create_user';
$route['usuario'] = 'admin/login/index';
$route['usuario/verificar'] = 'usuariocontroller/verificar';
$route['usuario/logout'] = 'usuariocontroller/logout';



$route['usuario'] = 'usuariocontroller/index';
$route['usuario/verificar'] = 'usuariocontroller/verificar';
$route['usuario/logout'] = 'usuariocontroller/logout';














$route['categoria'] = 'categoriacontroller/index';
$route['categoria/salvar'] = 'categoriacontroller/salvar';
$route['categoria/novo'] = 'categoriacontroller/novo';
$route['categoria/editar/(:num)']= 'categoriacontroller/editar/$1';
$route['categoria/atualizar/(:num)'] = 'categoriacontroller/atualizar/$1';
$route['categoria/abrir/(:num)'] = 'categoriacontroller/abrir/$1';
$route['categoria/excluir/(:num)'] = 'categoriacontroller/excluir/$1';
$route['categoria/json'] = 'categoriacontroller/json';
$route['categoria/json2'] = 'categoriacontroller/json2';



$route['cardapio'] = 'cardapiocontroller/index';
$route['cardapio/salvar'] = 'cardapiocontroller/salvar';
$route['cardapio/novo'] = 'cardapiocontroller/novo';
$route['cardapio/editar/(:num)']= 'cardapiocontroller/editar/$1';
$route['cardapio/atualizar/(:num)'] = 'cardapiocontroller/atualizar/$1';
$route['cardapio/abrir/(:num)'] = 'cardapiocontroller/abrir/$1';
$route['cardapio/excluir/(:num)'] = 'cardapiocontroller/excluir/$1';
$route['cardapio/json'] = 'cardapiocontroller/json';
$route['cardapio/json2'] = 'cardapiocontroller/json2';
$route['cardapio/mobile'] = 'cardapiocontroller/mobile';