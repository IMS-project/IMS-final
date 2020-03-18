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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('import/import-excel','ImportController@index');
Route::post('import/import-excel','ImportController@import');

Route::resource('universities', 'UniversityController');
Route::resource('companies', 'CompanyController');

Route::resource('UniCoordinator', 'UniCoordinatorController');
Route::resource('CompCoordinator', 'CompCoordinatorController');
Route::resource('departmants', 'DepartmentController');
Route::resource('universities', 'University\UniversityController');

Route::get('import/import-excel','ImportController@index');
Route::post('import/import-excel','ImportController@import');
Route::resource('departments', 'DepartmentController');
//Route::resource('UniCoordinator', 'University\UniCoordinatorController');
