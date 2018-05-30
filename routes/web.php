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
Route::group([
	"prefix" => LaravelLocalization::setLocale(), 
	'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
	"namespace" => 'Web'], function(){
		//Route::get('/', function () {return view('welcome');});
		Route::get('/', 'HomeController@index')->name("web.home");
		Route::get('/about', 'AboutController@index')->name("web.about");
		Route::get('/blog', 'BlogController@index')->name("web.blog");
		Route::get('/contacts', 'ContactsController@index')->name("web.contacts");
		Route::get('/faq', 'FaqController@index')->name("web.faq");
		Route::get('/videos', 'VideosController@index')->name("web.videos");
		
});
