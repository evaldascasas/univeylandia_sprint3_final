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
 Route::get('/noticies/n',"HomeController@noticia")->name('noticia');
 Route::get('/promocions',"HomeController@promocions")->name('promocions');
 Route::get('/atraccions',"HomeController@atraccions")->name('atraccions');
 Route::get('/entrades',"HomeController@entrades")->name('entrades');
 Route::get('/gestio',"HomeController@gestio")->name('gestio')->middleware(['auth','is_admin','verified']);
 Route::get('/perfil',"HomeController@perfil")->name('perfil')->middleware(['auth','verified']);
 Route::get('/incidencia',"HomeController@incidencia")->name('incidencia')->middleware(['auth','verified']);
 Route::get('/mes', "HomeController@mes")->name('mes');
 Route::get('/pizzeria',"HomeController@pizzeria")->name('pizzeria');
 Route::get('/faq',"HomeController@faq")->name('faq');
 Route::get('/multimedia',"HomeController@multimedia")->name('multimedia');
 Route::patch('/notification-read/{id}', 'NotificationsController@destroy')->name('markasread')->middleware(['auth','verified']);
 
 /* RUTES GRUP 1 */
 Auth::routes(['verify' => true]);

 Route::post('/incidencia', 'HomeController@store_incidencia')->name('incidencia')->middleware(['auth','verified']);

 Route::get('gestio/incidencies/assign', 'IncidenciesController@assigned')->name('incidencies.assign')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/incidencies', 'IncidenciesController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/empleats', 'EmpleatsController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/zones', 'ZonesController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/AssignEmpZona', 'AssignEmpZonaController')->middleware(['auth','is_admin','verified']);

 Route::resource('gestio/serveis', 'ServeisController')->middleware(['auth','is_admin','verified']);

 Route::resource('/gestio/noticies', 'NoticiesController')->middleware(['auth','is_admin','verified']);

 Route::get('promocions/promocio_x', ['as' => 'promocio_x', function(){
   $title = "Promoció X";
   return view ('/promocio_x', compact('title'));
 }]);

 Route::get('/votacions',"HomeController@votacions")->name('votacions');

 Route::post('/votacions',"HomeController@votacio_accio")->name('votacio_accio');

 /* RUTES GRUP 2 */
 Route::resource('/gestio/atraccions', 'AtraccionsController')->middleware(['auth','is_admin','verified']);

 Route::get('/gestio/atraccions/image', 'AtraccionsController@store')->name('image.upload')->middleware(['auth','is_admin','verified']);
 Route::post('/gestio/atraccions/image', 'AtraccionsController@store')->name('image.upload.post')->middleware(['auth','is_admin','verified']);

 Route::resource('/gestio/clients', 'ClientsController')->middleware(['auth','is_admin','verified']);

 /* A SABER */
 //Route::get('/view/vustesoarc/atraccions', 'AtraccionsController@index');

 /* Guardar PDF */
 Route::get('/view/atraccions/index', 'AtraccionsController@guardarPDF')->middleware(['auth','is_admin','verified']);
 Route::get('/view/incidencies/assign', 'IncidenciesController@assignadesGuardarPDF')->middleware(['auth','is_admin','verified']);

 /* gestio imatges */
 Route::get("/gestio/imatges", "ImageController@create")->name('imatges.create')->middleware(['auth','is_admin','verified']);
 Route::post("/gestio/imatges/save", "ImageController@save")->name('imatges.save')->middleware(['auth','is_admin','verified']);

 /* Venda productes + cistella */
 Route::post('/entrades', array('as' => 'entrades','uses' => 'HomeController@parc_afegir_cistella'));
 Route::resource('/gestio/productes', 'gestioProductes')->middleware(['auth','is_admin','verified']);
 Route::resource('/gestio/ventes', 'VentesController')->middleware(['auth','is_admin','verified']);
 Route::get('/tendes', array('as' => 'tendes','uses' => 'HomeController@tendes_inter'));
 Route::get('/tendes/figures', array('as' => 'tenda_figures','uses' => 'HomeController@tenda_figures'));

 Route::get('/cistella', 'HomeController@cistella')->name('cistella')->middleware(['auth','verified']);
 Route::delete('/cistella', 'HomeController@cistella_delete')->name('cistella')->middleware(['auth','verified']);
 Route::get('/compra', 'HomeController@compra')->name('compra')->middleware(['auth','verified']);
 Route::get('/compra_finalitzada', 'HomeController@compra_finalitzada')->name('compra_finalitzada')->middleware(['auth','verified']);
