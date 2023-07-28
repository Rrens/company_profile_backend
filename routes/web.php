<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
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
    }
);

Route::group(
    [
        'prefix' => 'auth',
    ],
    function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
    }
);
