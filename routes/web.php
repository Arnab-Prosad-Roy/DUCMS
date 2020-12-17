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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'frontPart\frontController@index');
Route::get('admin/dashboard', 'backPart\backController@index');
Route::get('menu','MenuController@index')->name('menu.get');

Auth::routes();
// sliders routes
Route::get('admin/dashboard', 'HomeController@index')->name('home');
Route::get('admin/slider_list', 'slider\sliderController@index')->name('sliderList');
Route::post('admin/slider_list', 'slider\sliderController@create')->name('sliderList');
Route::post('admin/slider_list', 'slider\sliderController@edit')->name('sliderEdit');
Route::post('admin/remove_slider', 'slider\sliderController@destroy')->name('sliderRemove');


//faculty members route

Route::get('admin/faculty_member_list', 'facultyMember\memberController@index')->name('memberList');
Route::post('admin/faculty_member_list', 'facultyMember\memberController@store')->name('memberList');
Route::post('save-form', 'facultyMember\memberController@store');