<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Rute untuk halaman utama
$routes->get('/', 'Tugas::index');

// Rute untuk autentikasi (jika diperlukan)
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');

// Rute untuk fitur CRUD Tugas
$routes->get('/tugas', 'Tugas::index');                    // Menampilkan daftar tugas
$routes->get('/tugas/tambah', 'Tugas::tambah');            // Form tambah tugas
$routes->post('/tugas/tambah', 'Tugas::tambah');           // Proses tambah tugas
$routes->get('/tugas/edit/(:num)', 'Tugas::edit/$1');      // Form edit tugas berdasarkan ID
$routes->post('/tugas/edit/(:num)', 'Tugas::edit/$1');     // Proses edit tugas berdasarkan ID
$routes->get('/tugas/hapus/(:num)', 'Tugas::hapus/$1');    // Hapus tugas berdasarkan ID
