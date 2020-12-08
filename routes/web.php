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
   Route::view('/','auth/login');

    Route::group(['middleware' => 'prevent-back-history'], function(){
    
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Auth::routes(['verify' => true]);
    Route::get('/applicant', 'ApplicantController@store')->name('applicant');//for the application function
    Route::get('/approve/{id}/{id2}/{id3}', 'ApplicationController@approve')->name('approve');//for the approve function
    Route::get('/reject/{id}', 'ApplicationController@reject')->name('reject');//for the reject function
    Route::get('/automatic', 'ApplicationController@automatic')->name('automatic');//for the approve function
    
    Route::get('/present/{id}', 'AttendanceController@present')->name('present');//for the approve function
    Route::get('/absent/{id}', 'AttendanceController@absent')->name('absent');//for the approve function
    Route::resource('/message', 'ChatController');//for the approve function
    Route::resource('/sendmessage', 'Advisorcontroller');
    Route::resource('/inboxdmessage', 'Automaticcontroller');



    Route::get('/list/{id}', 'ApplicationController@list')->name('list');
    Route::get('/assign', 'AssignController@store')->name('assign');//for the application function
    Route::get('/assignsuper', 'placementController@store')->name('assignsuper');//for the application function
    Route::resource('/internships', 'Company\InternshipController');
    Route::resource('applicants','ApplicationController');
    Route::resource('acceptance','AcceptanceController');
    Route::resource('studentadvisor','studentAdvisorController');
    Route::resource('studentsupervisor','studentSupervisor');
    Route::resource('superAdmin','SuperAdminController');
    Route::resource('Requests','placementController');
    Route::resource('Advisorplacement','AdvisorplacementController');
   
    Route::resource('Assignadvisor','AssignadvisorController');
    Route::resource('Assignsuper','AssignsupervisorController');

    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin', 'Admincontroller@index');
    Route::get('/student', 'Viewcontroller@index');
    Route::get('/advisor', 'AdvisorController@view')->name('advisor');
    Route::get('/show', 'AdvisorController@index')->name('show');
    Route::get('/showlist', 'SupervisorController@index')->name('showlist');
    Route::get('/supervisor', 'SupervisorController@view')->name('supervisor');
    Route::resource('offer_company', 'ApplicantController');
    Route::resource('universities', 'University\UniversityController');
    Route::resource('UniCoordinator', 'University\UniCoordinatorController');
    Route::resource('Advisor', 'University\AdvisorController');
    Route::resource('Student', 'University\StudentController');
    

    Route::resource('companies', 'Company\CompanyController');
    Route::resource('company', 'University\CompanyController');
    Route::resource('CompCoordinator','Company\CompCoordinatorController');
    Route::resource('Supervisor','Company\SupervisorController');
    Route::resource('departments',  'University\DepartmentController');
    Route::resource('companydepartments',  'Company\companydepartmentcontoller');
    Route::resource('Internship',  'Company\InternshipController');
  
    Route::get('import/import-excel','Imports\ImportController@index');
    Route::post('import/import-excel','Imports\ImportController@import');
    Route::resource('studentadvisor','studentAdvisorController');
    Route::resource('studentsupervisor','studentSupervisor');

    }
);