<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/login', 'Auth::index');
$routes->get('/admin/dashboard', 'Admin\DashboardController::index');

//route admin// 
//route untuk admin bagian lokasi
$routes->get('/admin/lokasi', 'Admin\LokasiController::index');
$routes->get('/admin/lokasi/tambah', 'Admin\LokasiController::tambah');
$routes->post('/admin/lokasi/simpan', 'Admin\LokasiController::simpan');
$routes->get('/admin/lokasi/edit/(:num)', 'Admin\LokasiController::edit/$1');
$routes->post('/admin/lokasi/update/(:num)', 'Admin\LokasiController::update/$1');
$routes->get('/admin/lokasi/hapus/(:num)', 'Admin\LokasiController::hapus/$1');

//route untuk admin bagian siswa
$routes->get('/admin/siswa', 'Admin\SiswaController::index');
$routes->get('/admin/siswa/tambah', 'Admin\SiswaController::tambah');
$routes->post('/admin/siswa/simpan', 'Admin\SiswaController::simpan');
$routes->get('/admin/siswa/edit/(:num)', 'Admin\SiswaController::edit/$1');
$routes->post('/admin/siswa/update/(:num)', 'Admin\SiswaController::update/$1');
$routes->get('/admin/siswa/hapus/(:num)', 'Admin\SiswaController::hapus/$1');

//route untuk admin bagian logbook
$routes->get('/admin/logbook', 'Admin\LogbookController::index');
$routes->get('/admin/logbook/tambah', 'Admin\LogbookController::tambah');
$routes->post('/admin/logbook/simpan', 'Admin\LogbookController::simpan');
$routes->get('/admin/logbook/edit/(:num)', 'Admin\LogbookController::edit/$1');
$routes->post('/admin/logbook/update/(:num)', 'Admin\LogbookController::update/$1');
$routes->get('/admin/logbook/hapus/(:num)', 'Admin\LogbookController::hapus/$1');

//route untuk admin bagian timeline magang
$routes->get('/admin/timeline_magang', 'Admin\TimelineMagangController::index');
$routes->get('/admin/timeline_magang/tambah', 'Admin\TimelineMagangController::tambah');
$routes->post('/admin/timeline_magang/simpan', 'Admin\TimelineMagangController::simpan');
$routes->get('/admin/timeline_magang/edit/(:num)', 'Admin\TimelineMagangController::edit/$1');
$routes->post('/admin/timeline_magang/update/(:num)', 'Admin\TimelineMagangController::update/$1');
$routes->get('/admin/timeline_magang/hapus/(:num)', 'Admin\TimelineMagangController::hapus/$1');

//route untuk admin bagian laporan kunjungan
$routes->get('/admin/laporan_kunjungan', 'Admin\LaporanKunjunganController::index');
$routes->get('/admin/laporan_kunjungan/tambah', 'Admin\LaporanKunjunganController::tambah');
$routes->post('/admin/laporan_kunjungan/simpan', 'Admin\LaporanKunjunganController::simpan');
$routes->get('/admin/laporan_kunjungan/edit/(:num)', 'Admin\LaporanKunjunganController::edit/$1');
$routes->post('/admin/laporan_kunjungan/update/(:num)', 'Admin\LaporanKunjunganController::update/$1');
$routes->get('/admin/laporan_kunjungan/hapus/(:num)', 'Admin\LaporanKunjunganController::hapus/$1');
