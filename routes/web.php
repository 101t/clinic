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
Route::get('storage/uploads/{filename}', function ($filename)
{
    $path = storage_path('uploads/'.$filename);
    //dd($path);
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

Route::group([
	"prefix" => LaravelLocalization::setLocale(), 
	'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
	"namespace" => 'Web'], function(){
		//Route::get('/', function () {return view('welcome');});
		Route::get('/', 'HomeController@index')->name("web.home");
		Route::get('/about', 'AboutController@index')->name("web.about");
		Route::post('/blog/{slug}/comment', 'BlogController@comment')->name("web.blog_comment")->middleware('auth');
		Route::get('/blog/{slug}', 'BlogController@detail')->name("web.blog_detail");
		Route::get('/blog', 'BlogController@index')->name("web.blog");
		Route::get('/contacts', 'ContactsController@index')->name("web.contacts");
		Route::get('/faq', 'FaqController@index')->name("web.faq");
		Route::get('/videos', 'VideosController@index')->name("web.videos");

		Route::get('/hair-transplantation/{slug}', 'HairTransController@detail')->name('web:hairtrans_detail');
		Route::get('/hair-transplantation', 'HairTransController@index')->name('web:hairtrans');
		Route::get('/patient-guide/{slug}', 'PatientGuideController@detail')->name('web:patientguide_detail');
		Route::get('/patient-guide', 'PatientGuideController@index')->name('web:patientguide');
		// News
		Route::get('/news/{slug}', 'NewsController@detail')->name('web:news_detail');
		Route::get('/news', 'NewsController@index')->name('web:news');
		
});

Route::group([
	'prefix' => '/admin',
	'namespace' => 'Admin',
	], function(){
		Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
		Route::post('/login', 'Auth\LoginController@login');
		Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

		// Registration Routes...
		Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
		Route::post('/register', 'Auth\RegisterController@register');

		// Password Reset Routes...
		Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
		Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
		Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
});

Route::group([
	'prefix' => '/admin',
	'namespace' => 'Admin',
	'middleware' => 'admin',
	], function(){
		Route::get('/home', 'HomeController@index')->name('admin:home');
		// Content
		Route::group([
			'prefix' => '/content',
			'namespace' => 'Content'
			], function(){
				//Faq
				Route::match(['get', 'post'], '/faq/manage', 'FaqController@manage')->name('admin:content_faq_manage');
				Route::get('/faq', 'FaqController@index')->name('admin:content_faq');
				// Slider
				Route::match(['get', 'post'], '/manage', 'SliderController@manage')->name('admin:content_slider_manage');
				Route::get('/', 'SliderController@index')->name('admin:content_slider');
				// Videos
				Route::match(['get', 'post'], '/videos/manage', 'VideosController@manage')->name('admin:content_videos_manage');
				Route::get('/videos', 'VideosController@index')->name('admin:content_videos');
				// Services
				Route::match(['get', 'post'], '/services/manage', 'ServicesController@manage')->name('admin:content_services_manage');
				Route::get('/services', 'ServicesController@index')->name('admin:content_services');
				// News
				Route::match(['get', 'post'], '/news/manage', 'NewsController@manage')->name('admin:content_news_manage');
				Route::get('/news', 'NewsController@index')->name('admin:content_news');
		});
		Route::group([
			'prefix' => '/blog',
			'namespace' => 'Blog'
			], function(){
				// Blog
				Route::resource('/posts', 'PostController');
			    Route::put('/posts/{post}/publish', 'PostController@publish')->middleware('admin');
			    Route::resource('/categories', 'CategoryController', ['except' => ['show']]);
			    Route::resource('/tags', 'TagController', ['except' => ['show']]);
			    Route::resource('/comments', 'CommentController', ['only' => ['index', 'destroy']]);
			    Route::resource('/users', 'UserController', ['middleware' => 'admin', 'only' => ['index', 'destroy']]);
		});
		Route::group([
			'prefix' => '/clinic',
			'namespace' => 'Clinic'
			], function(){
				// Hair Transplantation
				Route::match(['get', 'post'], '/hairtrans/manage', 'HairTransController@manage')->name('admin:clinic_hairtrans_manage');
				Route::get('/hairtrans', 'HairTransController@index')->name('admin:clinic_hairtrans');
				// Patient Guide
				Route::match(['get', 'post'], '/patientguide/manage', 'PatientGuideController@manage')->name('admin:clinic_patientguide_manage');
				Route::get('/patientguide', 'PatientGuideController@index')->name('admin:clinic_patientguide');
				// Dpctors
				Route::match(['get', 'post'], '/doctors/manage', 'DoctorsController@manage')->name('admin:clinic_doctors_manage');
				Route::get('/doctors', 'DoctorsController@index')->name('admin:clinic_doctors');
		});
		Route::group([
			'prefix' => '/settings',
			'namespace' => 'Settings'
			], function(){
				// Patient Guide
				Route::match(['get', 'post'], '/emailserver/manage', 'EmailServerController@manage')->name('admin:settings_emailserver_manage');
				Route::get('/emailserver', 'EmailServerController@index')->name('admin:settings_emailserver');
				// Dpctors
				Route::match(['get', 'post'], '/generalconfig/manage', 'GeneralConfigController@manage')->name('admin:settings_generalconfig_manage');
				Route::get('/generalconfig', 'GeneralConfigController@index')->name('admin:settings_generalconfig');
		});
		Route::group([
			'prefix' => '/auth',
			'namespace' => 'User'
		], function(){
			Route::resource('/users', 'UserController', ['only' => ['index', 'destroy']]);
		});
});