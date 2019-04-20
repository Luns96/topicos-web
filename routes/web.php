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

// Route::get('/', function () {
//     $user = App\Section::findOrFail(1);
//     return $user->class;
// });
Route::view('/','welcome')->name('welcome');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/about','about')->name('about');
    // Route::get('user/index', 'UsersController@index')->name('user.index');
    // Route::get('user/create', 'UsersController@create')->name('user.create');
    // Route::post('user/index', 'UsersController@store')->name('user.store');
    // Route::get('user/{id}/edit', 'UsersController@edit')->name('user.edit');
    // Route::put('user/{id}', 'UsersController@update')->name('user.update');
    // Route::get('user/{id}', 'UsersController@show')->name('user.show');
    // Route::delete('user/{id}', 'UsersController@destroy')->name('user.destroy');

// Accounts Manager
Route::group(['middleware' => ['permission:read-user'],], function () {
    Route::group(['middleware' => ['permission:create-user']], function () {
        Route::get('user/create', 'UsersController@create')->name('user.create');
        Route::post('user/index', 'UsersController@store')->name('user.store');
    });
    Route::get('user/index', 'UsersController@index')->name('user.index');
    Route::get('user/{id}', 'UsersController@show')->name('user.show');
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('user/{id}/edit', 'UsersController@edit')->name('user.edit');
        Route::put('user/{id}', 'UsersController@update')->name('user.update');
        Route::delete('user/{id}', 'UsersController@destroy')->name('user.destroy');
    });
});

// Class Manager
Route::group(['middleware' => ['permission:read-user'],], function () {
    Route::post('section/index', 'SectionController@store')->name('section.store');
    Route::get('section/index', 'SectionController@index')->name('section.index');
    Route::get('section/{id}', 'SectionController@show')->name('section.show');
    Route::get('section/class/show/{id}', 'ScheduleController@show')->name('class.show');
    Route::group(['middleware' => ['role:admin']], function () {
                Route::post('section/index', 'SectionController@store')->name('section.store');
        Route::delete('section/{id}', 'SectionController@destroy')->name('section.destroy');
        Route::post('section/class/create/{id}', 'ScheduleController@store')->name('class.store');
        Route::get('section/class/create/{id}', 'ScheduleController@create')->name('class.create');
        Route::delete('section/class/show/{id}', 'ScheduleController@destroy')->name('class.destroy');
    });
});
Route::delete('section/class/show/student/{id}', 'ScheduleController@destroystudent')->name('student.destroy');

// // Class Manager
// Route::group([
//     'middleware' => ['permission:read-user'],
// ], function(){
//     Route::group([
//         'middleware' => ['role:admin'],
//     ], function(){
//         Route::post('section/index', 'SectionController@store')->name('section.store');
//         Route::delete('section/{id}', 'SectionController@destroy')->name('section.destroy');
//         Route::post('section/class/create/{id}', 'ScheduleController@store')->name('class.store');
//         Route::get('section/class/create/{id}', 'ScheduleController@create')->name('class.create');
//         Route::delete('section/class/show/{id}', 'ScheduleController@destroy')->name('class.destroy');
//     });
//     Route::get('section/{id}', 'SectionController@show')->name('section.show');
//     Route::get('section/index', 'SectionController@index')->name('section.index');
//     Route::get('section/class/show/{id}', 'ScheduleController@show')->name('class.show');
// });


// // Class Manager
// Route::get('section/index', 'SectionController@index')->name('section.index');
// Route::post('section/index', 'SectionController@store')->name('section.store');
// Route::get('section/{id}', 'SectionController@show')->name('section.show');
// Route::delete('section/{id}', 'SectionController@destroy')->name('section.destroy');
// Route::get('section/class/show/{id}', 'ScheduleController@show')->name('class.show');
// Route::post('section/class/create/{id}', 'ScheduleController@store')->name('class.store');
// Route::get('section/class/create/{id}', 'ScheduleController@create')->name('class.create');
// Route::delete('section/class/show/{id}', 'ScheduleController@destroy')->name('class.destroy');

// View Class
Route::get('class/{id}', 'UsersController@class')->name('class');

// Route::get('section/{id}/edit', 'SectionController@edit')->name('section.edit');
// Route::resource('user', 'UsersController');

// Route::resource('class', 'SectionController');
// Route::Put('add_teacher', 'SectionController@add_teacher')->name('add_teacher');

Route::view('p','prueba')->name('p');
