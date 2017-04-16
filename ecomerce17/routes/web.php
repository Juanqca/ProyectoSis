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

Route::get('/', function () {
    return view('welcome');

});
//CRUD CATALOG
Route::get('catalogs','CatalogController@listAll');
Route::get('catalogs/create','CatalogController@create');
Route::post('catalogs/save','CatalogController@save');
Route::get('catalogs/update','CatalogController@update');
Route::get('catalogs/delete','CatalogController@delete');
Route::get('catalogs/show/{idCatalog}','CatalogController@show');
