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
    
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Auth::routes(['verify' => true]);
    Route::get('/applicant/{id}', 'ApplicantController@store')->name('applicant');//for the application function
    Route::get('/approve/{id}', 'ApplicationController@approve')->name('approve');//for the approve function
    Route::get('/reject/{id}', 'ApplicationController@reject')->name('reject');//for the reject function
    Route::get('/accept/{id}', 'placementController@store')->name('accept');//for the acceptance function
    Route::resource('/internships', 'Company\InternshipController');
    Route::resource('applicants','ApplicationController');
    Route::resource('acceptance','AcceptanceController');
    Route::resource('superAdmin','SuperAdminController');
    Route::resource('placements','placementController');
    Route::get('/home', 'HomeController@index')->middleware('verified');
    // Route::resource('Applicants', 'University\PlacementController');
    Route::resource('students', 'ApplicantController');
    Route::resource('universities', 'University\UniversityController');
    Route::resource('UniCoordinator', 'University\UniCoordinatorController');
           Route::resource('Advisor', 'University\AdvisorController');
           Route::resource('Student', 'University\StudentController');
    //  Route::resource('departments',  'University\DepartmentController');

    Route::resource('companies', 'Company\CompanyController');
    Route::resource('company', 'University\CompanyController');
    Route::resource('CompCoordinator','Company\CompCoordinatorController');
         Route::resource('Supervisor','Company\SupervisorController');

    Route::resource('departments',  'University\DepartmentController');
    Route::resource('Internship',  'Company\InternshipController');
  
    Route::get('import/import-excel','Imports\ImportController@index');
    Route::post('import/import-excel','Imports\ImportController@import');


