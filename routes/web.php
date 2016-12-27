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

Route::get('/online_vazhipad', 'onlinevazhipadController@index');

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
Route::get('/online_vazhipad/ajax', 'onlinevazhipadController@ajax');

Route::post('/online_vazhipad/pay', 'MojoController@pay');
Route::get('/online_vazhipad/thankyou', 'MojoController@thankyou');
Route::get('/online_vazhipad/webhook', 'MojoController@webhook');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/users', 'AdminController@userIndex');
    Route::get('/admin/users/search', 'AdminController@userSearch');
    Route::get('/admin/users/{id}', ['uses' => 'AdminController@userShow', 'as' => 'user.show']);
    Route::get('/admin/users/{id}/edit', ['uses' => 'AdminController@userEdit', 'as' => 'user.edit']);
    Route::put('/admin/users/{id}/update', ['uses' => 'AdminController@userUpdate', 'as' => 'user.update']);
    Route::get('/admin/users/{id}/delete', ['uses' => 'AdminController@userDelete', 'as' => 'user.delete']);
    Route::delete('/admin/users/{id}/destroy', ['uses' => 'AdminController@userDestroy', 'as' => 'user.destroy']);

    Route::get('/admin/vtypes', 'AdminController@vtypeIndex');
    Route::get('/admin/vtypes/create', 'AdminController@vtypeCreate');
    Route::post('/admin/vtypes/create', 'AdminController@vtypeStore');
    Route::get('/admin/vtypes/{id}', ['uses' => 'AdminController@vtypeShow', 'as' => 'vtype.show']);
    Route::get('/admin/vtypes/{id}/edit', ['uses' => 'AdminController@vtypeEdit', 'as' => 'vtype.edit']);
    Route::put('/admin/vtypes/{id}/update', ['uses' => 'AdminController@vtypeUpdate', 'as' => 'vtype.update']);
    Route::get('/admin/vtypes/{id}/delete', ['uses' => 'AdminController@vtypeDelete', 'as' => 'vtype.delete']);
    Route::delete('/admin/vtypes/{id}/destroy', ['uses' => 'AdminController@vtypeDestroy', 'as' => 'vtype.destroy']);

    Route::get('/admin/vnames', 'AdminController@vnameIndex');
    Route::get('/admin/vnames/create', 'AdminController@vnameCreate');
    Route::post('/admin/vnames/create', 'AdminController@vnameStore');
    Route::get('/admin/vnames/{id}', ['uses' => 'AdminController@vnameShow', 'as' => 'vname.show']);
    Route::get('/admin/vnames/{id}/edit', ['uses' => 'AdminController@vnameEdit', 'as' => 'vname.edit']);
    Route::put('/admin/vnames/{id}/update', ['uses' => 'AdminController@vnameUpdate', 'as' => 'vname.update']);
    Route::get('/admin/vnames/{id}/delete', ['uses' => 'AdminController@vnameDelete', 'as' => 'vname.delete']);
    Route::delete('/admin/vnames/{id}/destroy', ['uses' => 'AdminController@vnameDestroy', 'as' => 'vname.destroy']);
});
