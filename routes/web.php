<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@welcome');
Route::get('/about-us', 'PageController@aboutUs');
Route::get('/contact-us', 'PageController@contactUs');
Route::get('/login', 'PageController@login');
Route::get('/service', 'PageController@service');


Route::get('/design', 'PageController@design');
Route::get('/machine-learning', 'PageController@machineLearning');
Route::get('/web-development', 'PageController@webDevelopment');
Route::get('/mobile-development', 'PageController@mobileDevelopment');


//Route::get('/product-design', 'PageController@productDesign');
//Route::get('/blockchain', 'PageController@blockchain');

