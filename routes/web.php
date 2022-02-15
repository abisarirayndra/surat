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
Route::post('/up-login','AuthController@upLogin')->name('up-login');
Route::get('/registrasi','AuthController@registrasi')->name('registrasi');
Route::post('/upload-reg','AuthController@upRegistrasi')->name('upload-reg');
Route::get('/logout','AuthController@logout')->name('logout');

Route::group(['prefix' => 'warga','middleware' => ['auth','warga-role']], function () {
    Route::get('/pengajuan-surat','SuratController@suratWarga')->name('warga.pengajuan-surat');
    Route::get('/pilih-surat','SuratController@pilihJenisSurat')->name('warga.pilih-surat');
    Route::get('/data-surat-ktp','SuratController@dataSuratKtp')->name('warga.data-surat-ktp');
    Route::post('/up-data-surat-ktp','SuratController@upDataSuratKTP')->name('warga.up-data-surat-ktp');
    Route::get('/data-surat-tidakmampu','SuratController@dataSuratTidakMampu')->name('warga.data-surat-tidakmampu');
    Route::post('/up-data-surat-tidakmampu','SuratController@upDataSuratTidakMampu')->name('warga.up-data-surat-tidakmampu');
    Route::get('/data-surat-usaha','SuratController@dataSuratUsaha')->name('warga.data-surat-usaha');
    Route::post('/up-data-surat-usaha','SuratController@upDataSuratUsaha')->name('warga.up-data-surat-usaha');
    Route::get('/hapus-pengajuan-ktp/{id}','SuratController@hapusKTP')->name('warga.hapus-pengajuan-ktp');
    Route::get('/hapus-pengajuan-tidakmampu/{id}','SuratController@hapusTidakMampu')->name('warga.hapus-pengajuan-tidakmampu');
    Route::get('/hapus-pengajuan-usaha/{id}','SuratController@hapusUsaha')->name('warga.hapus-pengajuan-usaha');

});
Route::group(['prefix' => 'operator','middleware' => ['auth','operator-role']], function () {
    Route::get('/pengajuan-surat','SuratController@operatorSurat')->name('operator.pengajuan-surat');
    Route::get('/data-surat-ktp/{id}','SuratController@operatorLihatKtp')->name('operator.lihat-ktp');
    Route::post('/up-surat-ktp/{id}','SuratController@operatorUpSuratKTP')->name('operator.up-surat-ktp');
    Route::get('/data-surat-tidakmampu/{id}','SuratController@operatorLihatTidakMampu')->name('operator.lihat-tidakmampu');
    Route::post('/up-surat-tidakmampu/{id}','SuratController@operatorUpSuratTidakMampu')->name('operator.up-surat-tidakmampu');
    Route::get('/data-surat-usaha/{id}','SuratController@operatorLihatUsaha')->name('operator.lihat-usaha');
    Route::post('/up-surat-usaha/{id}','SuratController@operatorUpSuratUsaha')->name('operator.up-surat-usaha');
    Route::get('/hapus-pengajuan-ktp/{id}','SuratController@hapusKTP')->name('operator.hapus-pengajuan-ktp');
    Route::get('/hapus-pengajuan-tidakmampu/{id}','SuratController@hapusTidakMampu')->name('operator.hapus-pengajuan-tidakmampu');
    Route::get('/hapus-pengajuan-usaha/{id}','SuratController@hapusUsaha')->name('operator.hapus-pengajuan-usaha');
    Route::get('/stream-ktp/{id}','SuratController@pdfKTP')->name('operator.stream-ktp');

});

