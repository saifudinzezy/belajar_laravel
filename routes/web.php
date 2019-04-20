<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return ('Halo selamat datang siudin');
});

Route::get('blog', function () {
    return view('blog');
});

//memanggil controller dan panggil fungsi indexnya
Route::get('dosen', 'DosenController@index');

//lattihan request data melalui url
//parameter pertama pegawai
//dan parameter ke dua nama
// Route::get('/pegawai/{nama}', 'PegawaiController@index');
//menangkap data dari inputan
//dengan get
//di get itu adalah namafungsi, isi kedua adalah controlernya
Route::get('/formulir', 'PegawaiController@formulir');
//dengan post menangkap data dari form
Route::post('/formulir/proses', 'PegawaiController@proses');

//latihan templating
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//latihan crud query builder
//read
Route::get('/pegawai', 'PegawaiController@index');
//create
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
//proses
Route::post('/pegawai/store', 'PegawaiController@store');
//edit
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
//update
Route::post('/pegawai/update', 'PegawaiController@update');
//hapus
//cari
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
//form validasi
Route::get('/input', 'MalasngodingController@input');
Route::post('/proses', 'MalasngodingController@proses');
//belajar orm dan eloquent
Route::get('/karyawan', 'KaryawanController@index');
//crud dengan eloquent
Route::get('/pekerja', 'PekerjaController@index');
//create
//form create
Route::get('/pekerja/tambah', 'PekerjaController@tambah');
//create
Route::post('/pekerja/store', 'PekerjaController@store');
//form update
Route::get('/pekerja/edit/{id}', 'PekerjaController@edit');
//form dengan put
Route::put('/pekerja/update/{id}', 'PekerjaController@update');
//form hapus
Route::get('/pekerja/hapus/{id}', 'PekerjaController@delete');

//belajar soft delete
Route::get('/guru', 'GuruController@index');
//hapus
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
//tampilkan data yg telah softdelete
Route::get('/guru/trash', 'GuruController@trash');
//untuk mengembalikan data yang sudah ke soft delete
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
//restore semua data yang ke softdelete
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
//hapus permanen data yang ke doftdelete
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
//hapus permanen semua data yg ke softdelete
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');
//one to one table
Route::get('/pengguna', 'PenggunaController@index');