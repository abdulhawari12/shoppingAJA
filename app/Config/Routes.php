<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->delete('/Cart/Delete/(:num)', 'Cart::delete/$1');
$routes->delete('/Cart/AllDelete/(:num)', 'Cart::AllDelete/$1');
$routes->get('/', 'Home::index');
$routes->get('/Order', 'Home::order');
$routes->get('/Status', 'Home::status');
$routes->get('/Settings', 'Home::settings');
$routes->get('/Saldo', 'WalletController::index');
$routes->post('/Pesanan', 'PesananController::index');
$routes->get('/TambahSaldo', 'WalletController::tambah');
$routes->post('/addSaldo/(:num)', 'WalletController::addsaldo/$1');
$routes->get('/Cart', 'Cart::index');
$routes->get('/EditProfile', 'UserController::index');
$routes->post('/EditProfile/(:num)', 'UserController::addUser/$1');
$routes->post('/AddToCart', 'Cart::AddCart');
$routes->get('/Detail/(:any)', 'Home::getById/$1');
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/product', 'Admin::product');
$routes->get('/admin/users', 'Admin::users');
$routes->get('/admin/content', 'Admin::content');
$routes->get('/admin/settings', 'Admin::settings');
$routes->post('/admin/AddProduct', 'Admin::addproduct');
