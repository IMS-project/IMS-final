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

    Route::resource('universities', 'University\UniversityController');
    Route::resource('UniCoordinator', 'University\UniCoordinatorController');
     Route::resource('Advisor', 'University\AdvisorController');

    Route::resource('companies', 'Company\CompanyController');
    Route::resource('CompCoordinator','Company\CompCoordinatorController');

    Route::resource('departments',  'University\DepartmentController');
    Route::resource('internships',  'Company\InternshipController');

    //Route::get('import/import-excel','ImportController@index');
    //Route::post('import/import-excel','ImportController@import');
    Route::get('import/import-excel','Imports\ImportController@index');
    Route::post('import/import-excel','Imports\ImportController@import');


