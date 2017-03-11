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

Route::get('/', ['uses' => 'HomeController@home', 'as' => 'welcome']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact_us', 'contactusController@index')->name('home');
Route::post('contact_us/send', 'contactusController@sendmail');

Route::get('/upadevas', 'upadevasController@index');

Route::get('/activities', 'activitiesController@index');

Route::get('/festivals', 'festivalsController@index');

Route::get('/facilities', 'facilitiesController@index');

Route::get('/kalapeedom', 'kalapeedomController@index');

Route::get('/gallery1', 'galleryController@Gallery1');
Route::get('/gallery2', 'galleryController@gallery2');
Route::get('/gallery3', 'galleryController@gallery3');
Route::get('/gallery4', 'galleryController@gallery4');

Route::get('/online_vazhipad', 'onlinevazhipadController@index');
Route::post('/online_vazhipad/ajax', 'onlinevazhipadController@ajax');

Route::post('/online_vazhipad/pay', 'MojoController@pay');
Route::any('/online_vazhipad/thankyou', 'MojoController@thankyou');
Route::any('/online_vazhipad/webhook', 'MojoController@webhook');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AdminLoginController@ShowLogin');
    Route::post('/login', 'AdminLoginController@PostLogin');
    Route::get('/users', 'AdminController@userIndex');
    Route::get('/users/{id}', ['uses' => 'AdminController@userShow', 'as' => 'user.show']);
    Route::get('/users/{id}/edit', ['uses' => 'AdminController@userEdit', 'as' => 'user.edit']);
    Route::put('/users/{id}/update', ['uses' => 'AdminController@userUpdate', 'as' => 'user.update']);
    Route::get('/users/{id}/delete', ['uses' => 'AdminController@userDelete', 'as' => 'user.delete']);
    Route::delete('/users/{id}/destroy', ['uses' => 'AdminController@userDestroy', 'as' => 'user.destroy']);

    Route::get('/vtypes', 'AdminController@vtypeIndex');
    Route::get('/vtypes/create', 'AdminController@vtypeCreate');
    Route::post('/vtypes/create', 'AdminController@vtypeStore');
    Route::get('/vtypes/{id}', ['uses' => 'AdminController@vtypeShow', 'as' => 'vtype.show']);
    Route::get('/vtypes/{id}/edit', ['uses' => 'AdminController@vtypeEdit', 'as' => 'vtype.edit']);
    Route::put('/vtypes/{id}/update', ['uses' => 'AdminController@vtypeUpdate', 'as' => 'vtype.update']);
    Route::get('/vtypes/{id}/delete', ['uses' => 'AdminController@vtypeDelete', 'as' => 'vtype.delete']);
    Route::delete('/vtypes/{id}/destroy', ['uses' => 'AdminController@vtypeDestroy', 'as' => 'vtype.destroy']);

    Route::get('/vnames', 'AdminController@vnameIndex');
    Route::get('/vnames/create', 'AdminController@vnameCreate');
    Route::post('/vnames/create', 'AdminController@vnameStore');
    Route::get('/vnames/{id}', ['uses' => 'AdminController@vnameShow', 'as' => 'vname.show']);
    Route::get('/vnames/{id}/edit', ['uses' => 'AdminController@vnameEdit', 'as' => 'vname.edit']);
    Route::put('/vnames/{id}/update', ['uses' => 'AdminController@vnameUpdate', 'as' => 'vname.update']);
    Route::get('/vnames/{id}/delete', ['uses' => 'AdminController@vnameDelete', 'as' => 'vname.delete']);
    Route::delete('/vnames/{id}/destroy', ['uses' => 'AdminController@vnameDestroy', 'as' => 'vname.destroy']);
});
