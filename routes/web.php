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
Route::get('/edu-class-list', 'EducatorController@edu_class_list')->name('edu_class_list');
Route::get('/edu-class', 'EducatorController@edu_class')->name('edu_class');
Route::get('/edu-class-edit', 'EducatorController@edu_class_edit')->name('edu_class_edit');

#Student
Route::get('/stud-dashboard', 'StudentController@stud_dashboard')->name('stud_dashboard');


Route::get('/blank', 'MainController@blank')->name('blank');
