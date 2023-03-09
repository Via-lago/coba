<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\DapurController;

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
    return view('index');
});

Route::get('/index1', function () {
    return view('index1');
});

Route::get('/login','App\Http\Controllers\CrudController@getlogin');

Route::post('/loginsuccess','App\Http\Controllers\CrudController@postlogin');

Route::get('/viewmenu','App\Http\Controllers\CrudController@viewdata');

Route::get('/addmenu','App\Http\Controllers\CrudController@adddata');

Route::post('/formadd','App\Http\Controllers\CrudController@formadd');

Route::get('/editmenu/{id}','App\Http\Controllers\CrudController@editdata');

Route::post('/formedit','App\Http\Controllers\CrudController@formedit');

Route::get('/deletemenu/{id}','App\Http\Controllers\CrudController@deletedata');

Route::get('/viewpaket','App\Http\Controllers\CrudController@viewpaket');

Route::get('/addpaket','App\Http\Controllers\CrudController@addpaket');

Route::post('/formaddpaket','App\Http\Controllers\CrudController@formaddpaket');

Route::get('/editpaket/{id}','App\Http\Controllers\CrudController@editpaket');

Route::post('/formeditpaket','App\Http\Controllers\CrudController@formeditpaket');

Route::get('/deletepaket/{id}','App\Http\Controllers\CrudController@deletepaket');

Route::get('/viewkaryawan','App\Http\Controllers\KaryawanController@viewkaryawan');

Route::get('/addkaryawan','App\Http\Controllers\KaryawanController@addkaryawan');

Route::post('/formaddkaryawan','App\Http\Controllers\KaryawanController@formaddkaryawan');

Route::get('/editkaryawan/{id}','App\Http\Controllers\KaryawanController@editkaryawan');

Route::post('/formeditkaryawan','App\Http\Controllers\KaryawanController@formeditkaryawan');

Route::get('/deletekaryawan/{id}','App\Http\Controllers\KaryawanController@deletekaryawan');

Route::get('/viewevent','App\Http\Controllers\EventController@viewevent');

Route::get('/addevent','App\Http\Controllers\EventController@addevent');

Route::post('/formaddevent','App\Http\Controllers\EventController@formaddevent');

Route::get('/editevent/{id}','App\Http\Controllers\EventController@editevent');

Route::post('/formeditevent','App\Http\Controllers\EventController@formeditevent');

Route::get('/deleteevent/{id}','App\Http\Controllers\EventController@deleteevent');

Route::get('/viewpengunjung','App\Http\Controllers\PengunjungController@viewpengunjung');

Route::get('/addpengunjung','App\Http\Controllers\PengunjungController@addpengunjung');

Route::post('/formaddpengunjung','App\Http\Controllers\PengunjungController@formaddpengunjung');

Route::get('/editpengunjung/{id}','App\Http\Controllers\PengunjungController@editpengunjung');

Route::post('/formeditpengunjung','App\Http\Controllers\PengunjungController@formeditpengunjung');

Route::get('/deletepengunjung/{id}','App\Http\Controllers\PengunjungController@deletepengunjung');

Route::get('/viewdapur','App\Http\Controllers\DapurController@viewdapur');

Route::get('/adddapur','App\Http\Controllers\DapurController@adddapur');

Route::post('/formadddapur','App\Http\Controllers\DapurController@formadddapur');

Route::get('/editdapur/{id}','App\Http\Controllers\DapurController@editdapur');

Route::post('/formeditdapur','App\Http\Controllers\DapurController@formeditdapur');

Route::get('/deletedapur/{id}','App\Http\Controllers\DapurController@deletedapur');

Route::get('/index1','App\Http\Controllers\CrudController@viewtransaksi');

Route::get('/transaksievent/{id}','App\Http\Controllers\EventController@buyevent');

Route::post('/formbuyevent','App\Http\Controllers\EventController@formbuyevent');

Route::get('/transaksipengunjung/{id}','App\Http\Controllers\PengunjungController@buypengunjung');

Route::post('/formbuypengunjung','App\Http\Controllers\PengunjungController@formbuypengunjung');