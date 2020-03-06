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
//to display users as role
    Route::get('/roles/{id}',function($id){  
    $user=User::find($id);  
    foreach($user->role as $role)  
    {  
       return $role->name;  
    }  
    });  
*/

Route::get('/', function () {
    return view('home');
});
//Route::get('/admin', 'AdminController@index')->name('admin');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/students/home', function () 
 //  return view('/students.home');
//});
Route::get('/advisor', 'AdvisorController@index')->name('advisor')->middleware('advisor');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/supervisor', 'SupervisorController@index')->name('supervisor')->middleware('supervisor');
Route::get('/student', 'StudentController@index')->name('student')->middleware('student');
Route::get('/university', 'UniversityCoordinatorController@index')->name('university')->middleware('university');
Route::get('/company', 'CompanyCoordinatorController@index')->name('company')->middleware('company');
