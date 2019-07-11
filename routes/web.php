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

Route::get('/', 'DataTableController@index')->name('home');

Route::get('/get-simple-datatables-data', 'DataTableController@getSimpleDatatablesData')->name('simple_datatables_users_data');

Route::get('/tree-of-workers',array('as'=>'jquery.treeview','uses'=>'TreeController@treeView'));
