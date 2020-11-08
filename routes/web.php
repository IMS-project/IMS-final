<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    

    Auth::routes(['verify' => true]);
     Route::get('/applicant/{id}', 'ApplicantController@store')->name('applicant');
    
    Route::get('/home', 'HomeController@index')->middleware('verified');
    // Route::resource('Applicants', 'University\PlacementController');
    Route::resource('Applicants', 'ApplicantController');
    Route::resource('universities', 'University\UniversityController');
    Route::resource('UniCoordinator', 'University\UniCoordinatorController');
           Route::resource('Advisor', 'University\AdvisorController');
           Route::resource('Student', 'University\StudentController');
      Route::resource('departments',  'University\DepartmentController');

    Route::resource('companies', 'Company\CompanyController');
    Route::resource('CompCoordinator','Company\CompCoordinatorController');
         Route::resource('Supervisor','Company\SupervisorController');

    Route::resource('departments',  'University\DepartmentController');
    Route::resource('Internship',  'Company\InternshipController');
  
    Route::get('import/import-excel','Imports\ImportController@index');
    Route::post('import/import-excel','Imports\ImportController@import');


