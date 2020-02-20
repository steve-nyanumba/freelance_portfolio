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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/blog/{post}', 'HomeController@show')->name('blog');


Route::get('/portfolio/{portfolio} ', 'HomeController@reveal')->name('portfolio');

Auth::routes();

Route::redirect('admin', 'admin/dashboard');

Route::group(['prefix' => 'admin','middleware'=>'auth', 'namespace'=>'admin'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('portfolio', 'PortfoliosController');
    Route::resource('post', 'PostsController');
    Route::resource('portfolio_category', 'PortCategoriesController');
    Route::resource('post_categories', 'PostCategoriesController');
    Route::resource('skills', 'SkillsController');
    Route::resource('testimonials', 'TestimonialsController');
    Route::resource('resume', 'ResumesController');
    Route::resource('experience', 'ExperiencesController');
    Route::resource('education', 'EducationsController');
    Route::resource('contact', 'ContactsController');
    Route::resource('about', 'AboutsController');
    Route::resource('wallpaper', 'WallpapersController');
    Route::resource('social', 'SocialsController');

});

