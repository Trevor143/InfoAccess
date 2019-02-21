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
//    return view('welcome');
//});
Route::get('/', 'LandingController@landing');

Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::middleware(['CheckAdmin'])->group(function () {
            Route::get('/users', 'UserController@index')->name('admin.approval.index');
            Route::get('/users/{user_id}', 'UserController@show')->name('admin.approval.show');
            Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.approval.approve');
            Route::get('/users/{user_id}/deactivate', 'UserController@deactivate')->name('admin.approval.deactivate');
        });
    });
});

Route::middleware(['Admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('opportunity', 'OpportunityController');
});

Route::middleware(['tipo'])->prefix('tipo')->name('tipo.')->group(function () {
    Route::resource('opportunity', 'TIPOController');
});

Route::middleware(['sme'])->prefix('sme')->name('sme.')->group(function () {
    Route::resource('opportunity', 'SMEController');
    Route::resource('approval', 'SMEController');
    Route::resource('response', 'ResponseController');
//    Route::resource('response', 'OpportunityController');
});

