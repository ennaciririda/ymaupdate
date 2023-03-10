<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YmaController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RealisationController;



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
    return view('client/welcome');
});

Route::get('/yma', [YmaController::class, 'index'])->name('yma');
Route::get('/studio', [StudioController::class, 'index'])->name('studio');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/realisation', [RealisationController::class, 'index'])->name('realisation');

Route::group(['middleware' => ['auth']], function(){
	Route::get('/adminpage', [AdminController::class, 'index'])->name('admin');
	Route::post('/contact', [ContactController::class, 'insert'])->name('contact.store');
	Route::post('/store', [AdminController::class, 'store'])->name('realisation.store');
	Route::delete('/projects/{id}', [AdminController::class, 'delete'])->name('realisation.delete');
	Route::get('/message', [ContactController::class, 'rida'])->name('message');

});

Auth::routes(['register' => false]);


