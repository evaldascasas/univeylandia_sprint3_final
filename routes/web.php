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
 Route::get('/',"HomeController@index")->name('home');
 Route::get('/contacte','HomeController@contacte')->name('contacte');
 Route::get('/noticies',"HomeController@noticies")->name('noticies');
 Route::get('/promocions',"HomeController@promocions")->name('promocions');
 Route::get('/atraccions',"HomeController@atraccions")->name('atraccions');
 Route::get('/entrades',"HomeController@entrades")->name('entrades');
 Route::get('/gestio',"HomeController@gestio")->name('gestio')->middleware(['auth','is_admin','verified']);
 Route::get('/perfil',"HomeController@perfil")->name('perfil')->middleware(['auth','verified']);
 Route::get('/incidencia',"HomeController@incidencia")->name('incidencia')->middleware(['auth','verified']);
 
 /* RUTES GRUP 1 */
 Auth::routes(['verify' => true]);

 Route::post('/incidencia', 'HomeController@store_incidencia')->name('incidencia')->middleware(['auth','verified']);
 //Route::get('/home', 'HomeController@index')->name('home');

 Route::get('gestio/incidencies/assign', 'IncidenciesController@assigned')->name('incidencies.assign');

 Route::resource('gestio/incidencies', 'IncidenciesController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/empleats', 'EmpleatsController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/zones', 'ZonesController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/serveis', 'ServeisController')->middleware(['auth','is_admin','verified']);

 Route::get('promocions/promocio_x', ['as' => 'promocio_x', function(){
   $title = "Promoció X";
   return view ('vistesparc/promocio_x', compact('title'));
 }]);

 Route::get('cistella',['as' => 'promocio_x', function(){
   $title = "Cistella";
   return view ('vistesparc/cistella', compact('title'));
 }])->middleware('auth');

 /* RUTES GRUP 2 */
 Route::resource('/gestio/atraccions', 'AtraccionsController')->middleware(['auth','is_admin','verified']);

 Route::get('/gestio/atraccions/image', 'AtraccionsController@store')->name('image.upload')->middleware(['auth','is_admin','verified']);
 Route::post('/gestio/atraccions/image', 'AtraccionsController@store')->name('image.upload.post')->middleware(['auth','is_admin','verified']);

 Route::resource('/gestio/clients', 'ClientsController')->middleware(['auth','is_admin','verified']);
 
 /* A SABER */
 Route::get('/view/vustesoarc/atraccions', 'AtraccionsController@index');

 /* Guardar PDF */
 Route::get('/view/atraccions/index', 'AtraccionsController@guardarPDF');

 /* gestio imatges */
 Route::get("/gestio/imatges", "ImageController@create")->name('imatges.create')->middleware(['auth','is_admin','verified']);
 Route::post("/gestio/imatges/save", "ImageController@save")->name('imatges.save')->middleware(['auth','is_admin','verified']);