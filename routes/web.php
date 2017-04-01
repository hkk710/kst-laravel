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

Route::get('/', 'HomeController@home');

Auth::routes();

Route::get('/contact_us', 'contactusController@index');
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

Route::group(['prefix' => 'online_vazhipad'], function() {
    Route::get('/', 'onlinevazhipadController@index');
    Route::post('/ajax', 'onlinevazhipadController@ajax');
    Route::group(['prefix' => 'cart', 'middleware' => 'auth'], function() {
        Route::get('/', 'CartController@index');
        Route::post('/store', 'MojoController@store');
        Route::get('/{id}/edit', 'CartController@edit')->name('cart.edit');
        Route::put('/{id}/update', 'CartController@update')->name('cart.update');
        Route::delete('/{id}/destroy', 'CartController@destroy')->name('cart.destroy');
    });
    Route::any('/thankyou', 'MojoController@thankyou');
    Route::any('/webhook', 'MojoController@webhook');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/login', 'AdminLoginController@ShowLogin');
    Route::post('/login', 'AdminLoginController@PostLogin');
    Route::get('/users', 'AdminController@userIndex');
    Route::get('/users/{id}', 'AdminController@userShow')->name('user.show');
    Route::get('/users/{id}/edit', 'AdminController@userEdit')->name('user.edit');
    Route::put('/users/{id}/update', 'AdminController@userUpdate')->name('user.update');
    Route::get('/users/{id}/delete', 'AdminController@userDelete')->name('user.delete');
    Route::delete('/users/{id}/destroy', 'AdminController@userDestroy')->name('user.destroy');

    Route::get('/vtypes', 'AdminController@vtypeIndex');
    Route::get('/vtypes/create', 'AdminController@vtypeCreate');
    Route::post('/vtypes/create', 'AdminController@vtypeStore');
    Route::get('/vtypes/{id}', 'AdminController@vtypeShow')->name('vtype.show');
    Route::get('/vtypes/{id}/edit', 'AdminController@vtypeEdit')->name('vtype.edit');
    Route::put('/vtypes/{id}/update', 'AdminController@vtypeUpdate')->name('vtype.update');
    Route::get('/vtypes/{id}/delete', 'AdminController@vtypeDelete')->name('vtype.delete');
    Route::delete('/vtypes/{id}/destroy', 'AdminController@vtypeDestroy')->name('vtype.destroy');

    Route::get('/vnames', 'AdminController@vnameIndex');
    Route::get('/vnames/create', 'AdminController@vnameCreate');
    Route::post('/vnames/create', 'AdminController@vnameStore');
    Route::get('/vnames/{id}', 'AdminController@vnameShow')->name('vname.show');
    Route::get('/vnames/{id}/edit', 'AdminController@vnameEdit')->name('vname.edit');
    Route::put('/vnames/{id}/update', 'AdminController@vnameUpdate')->name('vname.update');
    Route::get('/vnames/{id}/delete', 'AdminController@vnameDelete')->name('vname.delete');
    Route::delete('/vnames/{id}/destroy', 'AdminController@vnameDestroy')->name('vname.destroy');
});
