<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/registrasi', 'Auth::registrasi');
$routes->get('/registrasi', 'Auth::login');
$routes->post('/registrasi/submit', 'Auth::submit');

$routes->get('/login', 'Auth::index');
$routes->get('/admin/dashboard', 'Admin\DashboardController::index');
$routes->get('/siswa/dashboard', 'Siswa\DashboardController::index');

//route admin//

//route untuk admin bagian siswa
$routes->get('/admin/siswa', 'Admin\SiswaController::index');
$routes->get('/admin/siswa/tambah', 'Admin\SiswaController::tambah');
$routes->post('/admin/siswa/simpan', 'Admin\SiswaController::simpan');
$routes->get('/admin/siswa/edit/(:num)', 'Admin\SiswaController::edit/$1');
$routes->post('/admin/siswa/update/(:num)', 'Admin\SiswaController::update/$1');
$routes->get('/admin/siswa/hapus/(:num)', 'Admin\SiswaController::hapus/$1');

//route untuk admin bagian orang tua siswa
$routes->get('/admin/orang_tua_siswa', 'Admin\OrangTuaSiswaController::index');
$routes->get('/admin/orang_tua_siswa/tambah', 'Admin\OrangTuaSiswaController::tambah');
$routes->post('/admin/orang_tua_siswa/simpan', 'Admin\OrangTuaSiswaController::simpan');   
$routes->get('/admin/orang_tua_siswa/edit/(:num)', 'Admin\OrangTuaSiswaController::edit/$1');
$routes->post('/admin/orang_tua_siswa/update/(:num)', 'Admin\OrangTuaSiswaController::update/$1');
$routes->get('/admin/orang_tua_siswa/hapus/(:num)', 'Admin\OrangTuaSiswaController::hapus/$1');

//route untuk admin bagian logbook
$routes->get('/admin/logbook', 'Admin\LogbookController::index');
$routes->get('/admin/logbook/tambah', 'Admin\LogbookController::tambah');
$routes->post('/admin/logbook/simpan', 'Admin\LogbookController::simpan');
$routes->get('/admin/logbook/edit/(:num)', 'Admin\LogbookController::edit/$1');
$routes->post('/admin/logbook/update/(:num)', 'Admin\LogbookController::update/$1');
$routes->get('/admin/logbook/detail/(:num)', 'Admin\LogbookController::detail/$1');
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

//route untuk admin bagian validasi lokasi
$routes->get('/admin/validasi_lokasi', 'Admin\ValidasiLokasiController::index');
$routes->get('/admin/validasi_lokasi/tambah', 'Admin\ValidasiLokasiController::tambah');
$routes->post('/admin/validasi_lokasi/simpan', 'Admin\ValidasiLokasiController::simpan');
$routes->get('/admin/validasi_lokasi/edit/(:num)', 'Admin\ValidasiLokasiController::edit/$1');
$routes->post('/admin/validasi_lokasi/update/(:num)', 'Admin\ValidasiLokasiController::update/$1');
$routes->get('/admin/validasi_lokasi/hapus/(:num)', 'Admin\ValidasiLokasiController::hapus/$1');

//route untuk admin bagian jurusan
$routes->get('/admin/jurusan', 'Admin\JurusanController::index');
$routes->get('/admin/jurusan/tambah', 'Admin\JurusanController::tambah');
$routes->post('/admin/jurusan/simpan', 'Admin\JurusanController::simpan');
$routes->get('/admin/jurusan/edit/(:num)', 'Admin\JurusanController::edit/$1');
$routes->post('/admin/jurusan/update/(:num)', 'Admin\JurusanController::update/$1');
$routes->get('/admin/jurusan/hapus/(:num)', 'Admin\JurusanController::hapus/$1');


//ROUTE SISWA//
//route untuk siswa bagian Lokasi
$routes->get('/siswa/lokasi', 'Siswa\LokasiController::index');
$routes->get('/siswa/lokasi/tambah', 'Siswa\LokasiController::tambah');
$routes->post('/siswa/lokasi/simpan', 'Siswa\LokasiController::simpan');
$routes->get('/siswa/lokasi/edit/(:num)', 'Siswa\LokasiController::edit/$1');
$routes->post('/siswa/lokasi/update/(:num)', 'Siswa\LokasiController::update/$1');
$routes->get('/siswa/lokasi/hapus/(:num)', 'Siswa\LokasiController::hapus/$1');

//route untuk siswa bagian Logbook
$routes->get('/siswa/logbook', 'Siswa\LogbookController::index');
$routes->get('/siswa/logbook/tambah', 'Siswa\LogbookController::tambah');
$routes->post('/siswa/logbook/simpan', 'Siswa\LogbookController::simpan');
$routes->get('/siswa/logbook/edit/(:num)', 'Siswa\LogbookController::edit/$1');
$routes->post('/siswa/logbook/update/(:num)', 'Siswa\LogbookController::update/$1');
$routes->get('/siswa/logbook/hapus/(:num)', 'Siswa\LogbookController::hapus/$1');

//route untuk siswa bagian Profil
$routes->get('/siswa/logbook', 'Siswa\ProfilController::index');
$routes->get('/siswa/logbook/tambah', 'Siswa\ProfilController::tambah');
$routes->post('/siswa/logbook/simpan', 'Siswa\ProfilController::simpan');
$routes->get('/siswa/logbook/edit/(:num)', 'Siswa\ProfilController::edit/$1');
$routes->post('/siswa/logbook/update/(:num)', 'Siswa\ProfilController::update/$1');
$routes->get('/siswa/logbook/hapus/(:num)', 'Siswa\ProfilController::hapus/$1');