<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FutController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
/* |--------------------------------------------------------------------------
   | Web Routes |
    -------------------------------------------------------------------------- 
 | 
 | Here is where you can register web routes for your application. These 
 |routes are loaded by the RouteServiceProvider within a group which 
 | contains the "web" middleware group. Now create something great! 
 | 
 */

Route::get('/', function () {
    return view('home');
});
/* ------------------------------------------------------------------------------------------- 
|  route [ ADMIN ] page  
------------------------------------------------------------------------------------------- */
Route::controller(PostController::class)->group(function () {
    route::get('admin/admin', 'show')->name('admin.admin');
    route::get('admin/create', 'create')->name('admin.create');
    route::get('admin/edit/{id}', 'edit')->name('admin.edit');
    route::get('admin/update/{id}', 'update')->name('admin.update');
    route::get('admin/destroy/{id}', 'destroy')->name('admin.destroy');
    route::get('admin/destroyAll/', 'destroy_all')->name('admin.destroyAll');
    
    /*---------------------- route [ post ] munu ---------------------------------------------*/
    route::post('admin/create/', 'store')->name('admin.store');
    route::post('admin/add/{id}', 'add')->name('admin.add');


});

/* 
 ----------------------------------------------------------------------------------------
|  route [ FUT ] page                                                                   !
 ----------------------------------------------------------------------------------------
*/
Route::resource('fut', FutController::class);

Route::controller(UserController::class)->group(function () {
    Route::get('users/', 'index')->name('ship.users');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class , 'index'])->name('home');
route::controller(FutController::class)->group(function () {
    route::get('fut/show/', 'show')->name('fut.show');
    route::get('fut/show/{id}', 'restore')->name('fut.restore');
    route::delete('fut/forceDelete/{id}', 'forceDelete')->name('fut.forceDelete');
    route::get ('fut/product/{id}', 'product') -> name ('fut.product');
});
