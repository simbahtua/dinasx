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

//Route::get('/', function () {
//    return view('frontend.landingpage ');
//});

//Route::get('/', function () {
//    return view('frontend.landingpage ');
//});

Route::get('/','frontend\LandingPageController@index');

Route::get('home','frontend\HomeController@index');
Route::get('page','frontend\PageController@index');
// Route::get('cekdps','frontend\CekDptController@index');
Route::get('cekdps',['as' => 'cekdps', 'uses' => 'frontend\CekDptController@index']);

Route::get('sejarahkpu','frontend\SejarahkpuController@index');
Route::get('kontak','frontend\KontakController@index');
Route::get('list_dokumen','frontend\DokumenController@index');

Route::get('list_berita','frontend\BeritaController@index');
Route::get('/detail_berita/{id}', [
  'uses' => 'frontend\BeritaController@detail',
  'as'   => 'detail_berita'
]);

Route::get('list_pilkada','frontend\PilkadaController@index');
Route::get('/detail_pilkada/{id}', [
  'uses' => 'frontend\PilkadaController@detail',
  'as'   => 'detail_pilkada'
]);

Route::get('list_artikel','frontend\ArtikelController@index');
Route::get('/detail_artikel/{id}', [
  'uses' => 'frontend\ArtikelController@detail',
  'as'   => 'detail_artikel'
]);

Route::get('/detail_pengumuman/{id}', [
  'uses' => 'frontend\PengumumanController@detail',
  'as'   => 'detail_pengumuman'
]);

Route::get('/detail_agenda/{id}', [
  'uses' => 'frontend\AgendaController@detail',
  'as'   => 'detail_agenda'
]);

Route::get('/download_file/{id}', [
  'uses' => 'frontend\HomeController@download_file',
  'as'   => 'download_file'
]);

Route::get('list_agenda','frontend\AgendaController@index');
Route::get('hukum','frontend\HukumController@index');
Route::get('list_pengumuman','frontend\PengumumanController@index');
Route::get('profile_anggota','frontend\ProfileAnggotaController@index');
// Route::get('profile_seketariat','frontend\ProfileSeketariatController@index');
Route::get('visi_misi','frontend\VisiMisiController@index');

Route::get('list_gallery','frontend\GalleryController@index');


// Route::post('cekdpt', 'frontend\CekDptController@checkList');
// Route::post('cekdpt', 'frontend\CekDptController@checkList');
Route::post('cekdps', ['as'=>'cari','uses'=>'frontend\CekDptController@checkList']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::group(['as' => 'voyager.'], function () {
    $mynamespacePrefix = '\\App\\Http\\Controllers\\Voyager\\';
        Route::group(['middleware' => 'admin.user'], function () use ($mynamespacePrefix) {
            Route::group([
                'as'     => 'data-dps.',
                'prefix' => 'data-pemilu/data-dps',
            ],function () use ($mynamespacePrefix) {
                Route::get('/', ['uses' => $mynamespacePrefix.'ElectionVoterController@index','as' => 'index']);
                Route::get('/{id}', ['uses' => $mynamespacePrefix.'ElectionVoterController@browse', 'as' => 'show' ]);
                Route::get('/{id}/create', ['uses' => $mynamespacePrefix.'ElectionVoterController@create', 'as' => 'create' ]);
                Route::get('/{id}/import', ['uses' => $mynamespacePrefix.'ElectionVoterController@import', 'as' => 'import' ]);
                Route::post('/upload/{id}', ['uses' => $mynamespacePrefix.'ElectionVoterController@upload', 'as' => 'upload' ]);
            });

            Route::group([
                'as'     => 'contact-us.',
                'prefix' => 'contact-us',
            ],function () use ($mynamespacePrefix) {
                Route::get('/', ['uses' => $mynamespacePrefix.'ContactUsController@index','as' => 'index']);
                Route::post('/', ['uses' => $mynamespacePrefix.'ContactUsController@store','as' => 'store']);
                Route::put('/', ['uses' => $mynamespacePrefix.'ContactUsController@update','as' => 'update']);

            });

            Route::group([
              'as'  => 'slider-home.',
              'prefix'  => 'slider-home',
            ],function() use ($mynamespacePrefix) {
              // Route::get('add',['uses' => $mynamespacePrefix.'HomeSliderController@add','as' => 'add']);
              Route::get('/',['uses' => $mynamespacePrefix.'SliderHome@index','as' => 'index']);
              Route::get('/create',['uses' => $mynamespacePrefix.'SliderHome@create','as' => 'create']);
              Route::post('/create',['uses' => $mynamespacePrefix.'SliderHome@store','as' => 'store']);
              Route::delete('{id}', ['uses' => $mynamespacePrefix.'SliderHome@delete', 'as' => 'destroy']);
              Route::post('order', ['uses' => $mynamespacePrefix.'SliderHome@order_item', 'as' => 'order']);
            });
        });
    });
});
