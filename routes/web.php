<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'LoginController@login')->name('login');
Route::post('/', 'LoginController@login_post')->name('login.post');
Route::post('/logout', 'LoginController@logout')->name('logout');
// Educator
Route::get('/edu-dashboard', 'EducatorController@edu_dashboard')->name('edu_dashboard');




Route::get('/stud-dashboard', 'StudentController@stud_dashboard')->name('stud_dashboard');


Route::get('/blank', 'MainController@blank')->name('blank');
