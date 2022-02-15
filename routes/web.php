<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','InfoController@beranda')->name('beranda');
Route::get('/berita-desa','InfoController@beritaDesa')->name('berita-desa');
Route::get('/berita-desa/PENGUNDIAN-NOMOR-URUT-DAN-PENETAPAN-CALON-KEPALA-DESA-SAMBIMULYO','InfoController@artikelSatu')->name('artikel-1');
Route::get('/berita-desa/PEMBINAAN-RT-DAN-RW-DESA-SAMBIMULYO','InfoController@artikelDua')->name('artikel-2');
Route::get('/berita-desa/LAPORAN-PERTANGGUNGJAWABAN-APBDES-TAHUN-2019-DESA-SAMBIMULYO','InfoController@artikelTiga')->name('artikel-3');
Route::get('/berita-desa/LAPORAN-PERTANGGUNGJAWABAN-APBDES-TAHUN-2020-DESA-SAMBIMULYO','InfoController@artikelEmpat')->name('artikel-4');
Route::get('/galeri-desa','InfoController@galeriDesa')->name('galeri-desa');

Route::get('/login','AuthController@login')->name('login');
Route::get('/registrasi','AuthController@registrasi')->name('registrasi');
Route::post('/upload-reg','AuthController@upRegistrasi')->name('upload-reg');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['prefix' => 'warga','middleware' => ['auth','warga-role']], function () {
    Route::get('/pengajuan-surat','SuratController@suratWarga')->name('warga.pengajuan-surat');

});

