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

Route::get('/', 'StudyController@index')->middleware('auth')
    ->name('home');

Route::get('doctor', 'StudyController@doctorIndex')->middleware('auth')
    ->name('doctorIndex');

Route::get('coordinator', 'StudyController@coordinatorIndex')->middleware('auth')
    ->name('coordinatorIndex');

Route::get('doctor/edit/{id}', 'StudyController@doctorEdit')->middleware('auth')
    ->name('doctorEdit');

Route::get('coordinator/edit/{id}', 'StudyController@coordinatorEdit')->middleware('auth')
    ->name('coordinatorEdit');

Route::get('coordinator/add/{patient_id?}', 'StudyController@coordinatorAdd')->middleware('auth')
    ->name('coordinatorAdd');

Route::get('patient/select','PatientController@select')->middleware('auth')
    ->name('patientSelect');

Route::get('patient/add','PatientController@add')->middleware('auth')
    ->name('patientAdd');


Auth::routes();


