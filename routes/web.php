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

Route::get('doctor/view/{id}', 'StudyController@doctorView')->middleware('auth')
    ->name('doctorView');

Route::get('coordinator/view/{id}', 'StudyController@coordinatorView')->middleware('auth')
    ->name('coordinatorView');

Route::get('coordinator/add/{patient_id?}', 'StudyController@coordinatorAdd')->middleware('auth')
    ->name('coordinatorAdd');

Route::get('pickPatient','PatientController@patientPickForNewStudy')->middleware('auth')
    ->name('pickPatient');

Route::get('addPatient')

Auth::routes();


