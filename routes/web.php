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

Route::group([
	'prefix' => '/admin',
	'namespace' => 'Admin'
	], function(){
		Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
		Route::post('login', 'Auth\LoginController@login');
		Route::get('logout', 'Auth\LoginController@logout')->name('logout');

		// Registration Routes...
		Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('register', 'Auth\RegisterController@register');

		// Password Reset Routes...
		Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
		Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
		Route::post('password/reset', 'Auth\ResetPasswordController@reset');

		Route::get('/', 'HomeController@index')->name('admin:home');
		// Content
		Route::group([
			'prefix' => '/content',
			'namespace' => 'Content'
			], function(){
				//Faq
				Route::match(['get', 'post'], '/faq/manage', 'FaqController@manage')->name('admin:content_faq_manage');
				Route::get('/faq/', 'FaqController@index')->name('admin:content_faq');
				// Slider
				Route::match(['get', 'post'], '/manage', 'SliderController@manage')->name('admin:content_slider_manage');
				Route::get('/', 'SliderController@index')->name('admin:content_slider');
		});
});