<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardSliderController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardCategoryController;

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

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home', function () {
   return redirect('/admin');
});

Route::get('/', function () {
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product:id}', [ProductController::class, 'show']);
Route::get('/about', [AboutController::class, 'index']);

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/staff', [AdminController::class, 'staff'])->middleware('userAkses:staff');
    Route::get('/admin/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::post('/logout', [SesiController::class, 'logout']);
    Route::resource('/admin/products', DashboardProductController::class)->middleware('auth');
    Route::resource('/admin/categories', DashboardCategoryController::class)->middleware('auth');
    Route::resource('/admin/users', DashboardUserController::class)->middleware('auth');
    Route::resource('/admin/sliders', DashboardSliderController::class)->middleware('auth');
});
