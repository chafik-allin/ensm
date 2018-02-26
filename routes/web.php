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

//pages
Route::get('/', ['uses'=>'PagesController@index', 'as'=>'index']);
Route::get('/about', ['uses'=>'PagesController@about', 'as'=>'about']);
Route::get('/contact', ['uses'=>'PagesController@contact', 'as'=>'contact']);

//Entreprises
Route::get('/recruter-nos-etudiants', ['uses'=>"PagesController@recruterEtudiants", 'as'=>'recruternosetudiants']);

Route::resource('companies', 'CompaniesController');
Route::resource('formations', 'TrainingsController');
Route::resource('/faq', 'FaqController');
Route::resource('menu', 'MenuController');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', ['uses' => 'PagesController@admin', 'as'=>'admin.index']);
Route::get('/admin/formations',['uses'=>'TrainingsController@admin', 'as'=>'admin.trainings']);