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

/* Front End Routes */
Route::get('/', 'FrontEndController@index')->name('frontend.home');
Route::get('/about', 'FrontEndController@about')->name('frontend.about');
Route::get('/work', 'FrontEndController@work')->name('frontend.work');
Route::get('/contact', 'FrontEndController@contact')->name('frontend.contact');

/* Project Resource Routes */
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects/create', 'ProjectsController@store');
Route::get('/projects/{project}', 'ProjectsController@show')->name('projects.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
