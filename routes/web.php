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
Route::get('/edu-profile-edit', 'EducatorController@edu_profile_edit')->name('edu_profile_edit');

#Student
Route::get('/stud-dashboard', 'StudentController@stud_dashboard')->name('stud_dashboard');
Route::get('/stud-class-list', 'StudentController@stud_class_list')->name('stud_class_list');
Route::get('/stud-profile-edit', 'StudentController@stud_profile_edit')->name('stud_profile_edit');
Route::get('/stud-class-find', 'StudentController@stud_class_find')->name('stud_class_find');
Route::get('/stud-class-details1', 'StudentController@stud_class_details1')->name('stud_class_details1');
Route::get('/stud-class-details2', 'StudentController@stud_class_details2')->name('stud_class_details2');
Route::get('/stud-cart', 'StudentController@stud_cart')->name('stud_cart');
Route::get('/stud-payment', 'StudentController@stud_payment')->name('stud_payment');
Route::get('/stud-invoice', 'StudentController@stud_invoice')->name('stud_invoice');

Route::get('/blank', 'MainController@blank')->name('blank');
