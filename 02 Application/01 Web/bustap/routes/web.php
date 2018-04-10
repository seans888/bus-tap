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
    return view('auth.login');
});

Route::resource('routes', 'RoutesController');
Route::resource('stops', 'StopsController');
Route::resource('employees', 'EmployeesController');
Route::resource('buses', 'BusesController');
Route::resource('schedules', 'SchedulesController');
Route::resource('news', 'NewsController');
Route::resource('congestions', 'CongestionController');
Route::resource('feedback', 'FeedbackController');
Route::resource('reservations', 'ReservationController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
