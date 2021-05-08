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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('home');
Route::get('about-us', 'AboutController@index')->name('about-us');
Route::get('faq', 'FaqController@index')->name('faq');
Route::get('full-material-takeoff', 'ServicesController@index')->name('full-material-takeoff');
Route::get('finishes', 'ServicesController@finishes')->name('finishes');
Route::get('drywall', 'ServicesController@drywall')->name('drywall');
Route::get('mechanical', 'ServicesController@mechanical')->name('mechanical');
Route::get('electrical', 'ServicesController@electrical')->name('electrical');
Route::get('plumbing', 'ServicesController@plumbing')->name('plumbing');
Route::get('landscaping', 'ServicesController@landscaping')->name('landscaping');
Route::get('bridge', 'ServicesController@bridge')->name('bridge');
Route::get('pricing', 'ServicesController@pricing')->name('pricing');
Route::get('earthwork', 'ServicesController@earthwork')->name('earthwork');
Route::get('portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('contact-us', 'ContactController@index')->name('contact-us');
Route::get('terms', 'TermsController@index')->name('terms');
