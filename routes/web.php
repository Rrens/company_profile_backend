<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\EventAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\HappeningController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Redirect;
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
Route::get('brand/{name}', [BrandsController::class, 'select_brand'])->name('brand.select');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('establishments', [EstablishmentController::class, 'index'])->name('establishment.index');
Route::get('galeries', [GaleryController::class, 'viewUser'])->name('galeries.viewUser');
Route::get('reserve-now', [ReserveController::class, 'index'])->name('reserve.index');

Route::post('/send-email', [EmailController::class, 'index'])->name('admin.email.index');
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth', 'role:admin,superadmin']
    ],
    function () {
        Route::get('/upload-multiple', [GaleryController::class, 'index_multiple_upload'])->name('upload_multiple.index');

        Route::post('upload-multiple', [GaleryController::class, 'uploadMultiple'])->name('upload_multiple');


        Route::get('brand', [BrandsController::class, 'brand_admin'])->name('admin.brand.index');
        Route::post('brand', [BrandsController::class, 'store'])->name('admin.brand.post');
        Route::get('brand/{id}', [BrandsController::class, 'edit'])->name('admin.brand.edit');
        Route::post('brand/update', [BrandsController::class, 'update'])->name('admin.brand.update');
        Route::post('brand/delete', [BrandsController::class, 'delete'])->name('admin.brand.delete');

        Route::get('galeries', [GaleryController::class, 'index'])->name('admin.galeries.index');
        Route::get('galeries/{name}', [GaleryController::class, 'filter_outlet'])->name('admin.galeries.filter');
        Route::post('galeries', [GaleryController::class, 'store'])->name('admin.galeries.store');
        Route::post('galeries/delete', [GaleryController::class, 'delete'])->name('admin.galeries.delete');
        Route::get('galeries/change-status/{id}', [GaleryController::class, 'change_status'])->name('admin.galeries.change_status');

        Route::get('header', [HeaderController::class, 'index'])->name('admin.header.index');
        Route::get('header/{name}', [HeaderController::class, 'filter_outlet'])->name('admin.header.filter');
        Route::post('header', [HeaderController::class, 'store'])->name('admin.header.store');
        Route::post('header/delete', [HeaderController::class, 'delete'])->name('admin.header.delete');
        Route::get('header/change-status/{id}', [HeaderController::class, 'change_status'])->name('admin.header.change_status');

        Route::get('event', [EventController::class, 'index_admin'])->name('admin.event.index');
        Route::post('event', [EventController::class, 'store'])->name('admin.event.store');
        Route::post('event/update', [EventController::class, 'update'])->name('admin.event.update');
        Route::post('event/delete', [EventController::class, 'delete'])->name('admin.event.delete');

        Route::get('career', [CareerController::class, 'index_admin'])->name('admin.career.index');
        Route::get('career/change-status/{id}', [CareerController::class, 'change_status'])->name('admin.career.change_status');
        Route::get('career/edit/{id}', [CareerController::class, 'edit'])->name('admin.career.edit');
        Route::post('career', [CareerController::class, 'store'])->name('admin.career.store');
        Route::post('career/update', [CareerController::class, 'update'])->name('admin.career.update');
        Route::post('career/delete', [CareerController::class, 'delete'])->name('admin.career.delete');

        Route::get('menu', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::post('menu', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::post('menu/update', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::post('menu/delete', [MenuController::class, 'delete'])->name('admin.menu.delete');

        Route::get('happening', [HappeningController::class, 'index'])->name('admin.happening.index');
        Route::post('happening', [HappeningController::class, 'store'])->name('admin.happening.store');
        Route::post('happening/update', [HappeningController::class, 'update'])->name('admin.happening.update');
        Route::post('happening/delete', [HappeningController::class, 'delete'])->name('admin.happening.delete');
    }
);

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth', 'role:superadmin']
    ],
    function () {
        Route::get('member', [AuthController::class, 'admin_page'])->name('admin.member.index');
        Route::post('member', [AuthController::class, 'post_register'])->name('admin.member.store');
        Route::post('member/update', [AuthController::class, 'update'])->name('admin.member.update');
        Route::post('member/delete', [AuthController::class, 'delete'])->name('admin.member.delete');
    }
);
Route::group(
    [
        'prefix' => 'auth',
    ],
    function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('post_login', [AuthController::class, 'post_login'])->name('post_login');
        // Route::post('register', [AuthController::class, 'register'])->name('register');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
    }
);
