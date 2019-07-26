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

Route::get('/', 'WelcomeController@products');



Route::get('/category/{id}', array('uses'=>'WelcomeController@productcategory',
                              'as' =>'categoryid'));

Route::get('/cataleg', 'ProductsController@cataleg');

Route::get('/cataleg', array('uses'=>'ProductsController@cataleg',
                      'as' =>'llistaprods'));

Route::get('/privacitat', array('uses'=>'ProductsController@privacitat',
                      'as' =>'privacitat'));        
                      
Route::get('/contacte', array('uses'=>'ProductsController@contacte',
'as' =>'contacte'))->middleware('auth');  

Route::get('/cataleg/detall/{id}',array('uses'=>'ProductsController@detallcataleg',
                                       'as' =>'detallcataleg'));

Route::get('/idioma/{locale}','ProductsController@canviIdioma');


Route::resource('/categories','CategoriesController');

Route::get('/categories/delete/{id}',array('uses'=>'CategoriesController@destroy',
                                              'as'=>'destroycategory'));

Route::resource('/brands','BrandsController');

Route::get('/brands/delete/{id}',array('uses'=>'BrandsController@destroy',
                                              'as'=>'destroybrand'));

Route::group(['middleware'=>'auth'],function(){

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard');

Route::get('/{id}', 'WelcomeController@productbrand');


