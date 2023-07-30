<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('brand', [BrandsController::class, 'index'])->name('brand.index');
Route::get('brand/beer-garden', [BrandsController::class, 'select_brand'])->name('brand.select');
Route::get('event', [EventController::class, 'index'])->name('event.index');
Route::get('career', [CareerController::class, 'index'])->name('career.index');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::group(
    [
        'prefix' => 'admin'
    ],
    function () {
        Route::get('brand', [BrandsController::class, 'brand_admin'])->name('admin.brand.index');
        Route::post('brand', [BrandsController::class, 'store'])->name('admin.brand.post');
        Route::get('brand/{id}', [BrandsController::class, 'edit'])->name('admin.brand.edit');
        Route::post('brand/update', [BrandsController::class, 'update'])->name('admin.brand.update');
        Route::post('brand/delete', [BrandsController::class, 'delete'])->name('admin.brand.delete');

        Route::get('galeries', [GaleryController::class, 'index'])->name('admin.galeries.index');
        Route::get('galeries/{name}', [GaleryController::class, 'filter_outlet'])->name('admin.galeries.filter');
        Route::post('galeries', [GaleryController::class, 'store'])->name('admin.galeries.store');
        Route::post('galeries/delete', [GaleryController::class, 'delete'])->name('admin.galeries.delete');
    }
);

Route::group(
    [
        'prefix' => 'auth',
    ],
    function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('register', [AuthController::class, 'register'])->name('register');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    }
);