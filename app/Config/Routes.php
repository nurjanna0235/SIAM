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
$routes->get('/orang_tua_siswa/dashboard', 'OrangTuaSiswa\DashboardController::index');
$routes->get('/guru_pendamping/dashboard', 'GuruPendamping\DashboardController::index');

//route admin//

//route untuk admin bagian guru pendamping
$routes->get('/admin/guru_pendamping', 'Admin\GuruPendampingController::index');
$routes->get('/admin/guru_pendamping/tambah', 'Admin\GuruPendampingController::tambah');
$routes->post('/admin/guru_pendamping/simpan', 'Admin\GuruPendampingController::simpan');
$routes->get('/admin/guru_pendamping/edit/(:num)', 'Admin\GuruPendampingController::edit/$1');
$routes->post('/admin/guru_pendamping/update/(:num)', 'Admin\GuruPendampingController::update/$1');
$routes->get('/admin/guru_pendamping/hapus/(:num)', 'Admin\GuruPendampingController::hapus/$1');

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
$routes->get('/siswa/profil', 'Siswa\ProfilController::index');
$routes->get('/siswa/profil/tambah', 'Siswa\ProfilController::tambah');
$routes->post('/siswa/profil/simpan', 'Siswa\ProfilController::simpan');
$routes->get('/siswa/profil/edit/(:num)', 'Siswa\ProfilController::edit/$1');
$routes->post('/siswa/profil/update/(:num)', 'Siswa\ProfilController::update/$1');
$routes->get('/siswa/profil/hapus/(:num)', 'Siswa\ProfilController::hapus/$1');

//route untuk siswa bagian Jurusan
$routes->get('/siswa/jurusan', 'Siswa\JurusanController::index');
$routes->get('/siswa/jurusan/tambah', 'Siswa\JurusanController::tambah');
$routes->post('/siswa/jurusan/simpan', 'Siswa\JurusanController::simpan');
$routes->get('/siswa/jurusan/edit/(:num)', 'Siswa\JurusanController::edit/$1');
$routes->post('/siswa/jurusan/update/(:num)', 'Siswa\JurusanController::update/$1');
$routes->get('/siswa/jurusan/hapus/(:num)', 'Siswa\JurusanController::hapus/$1');

//ROUTE ORANGTUA//
//route untuk orangtua bagian Logbook
$routes->get('/orang_tua_siswa/logbook', 'OrangTuaSiswa\LogbookController::index');
$routes->get('/orang_tua_siswa/logbook/tambah', 'OrangTuaSiswa\LogbookController::tambah');
$routes->post('/orang_tua_siswa/logbook/simpan', 'OrangTuaSiswa\LogbookController::simpan');
$routes->get('/orang_tua_siswa/logbook/edit/(:num)', 'OrangTuaSiswa\LogbookController::edit/$1');
$routes->post('/orang_tua_siswa/logbook/update/(:num)', 'OrangTuaSiswa\LogbookController::update/$1');
$routes->get('/orang_tua_siswa/logbook/hapus/(:num)', 'OrangTuaSiswa\LogbookController::hapus/$1');

//ROUTE GURUPENDAMPING//
//route untuk Guru Pendamping bagian Validasi
$routes->get('/guru_pendamping/validasi', 'GuruPendamping\ValidasiController::index');
$routes->get('/guru_pendamping/validasi/setuju/(:num)', 'GuruPendamping\ValidasiController::setuju/$1');
$routes->get('/guru_pendamping/validasi/tidak_setuju/(:num)', 'GuruPendamping\ValidasiController::tidak_setuju/$1');