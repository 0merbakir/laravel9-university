<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\MenuController;
use App\Http\Controllers\AdminPanel\ContentController;
use App\Http\Controllers\AdminPanel\ImageController;
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

Route::get('/home', function () {
    return view('home.index');
});

// Route::view('home2', 'home.index', ['name' => 'ÖMER BAKIR']);

// ***************home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/content/{id}', [HomeController::class, 'content'])->name('content');
Route::get('/menucontent/{id}/{slug}', [HomeController::class, 'menucontent'])->name('menucontent');



//***********************************admin routes */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    //**********************menu routes */
    Route::prefix('menus')->name('menus.')->controller(MenuController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    //*********************Content routes */
    Route::prefix('contents')->name('contents.')->controller(ContentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    //********************* Content Image Gallery routes */
    Route::prefix('images')->name('images.')->controller(ImageController::class)->group(function () {
        Route::get('/{c_id}', 'index')->name('index');
        Route::get('/create/{c_id}', 'create')->name('create');
        Route::post('/store/{c_id}', 'store')->name('store');
        Route::post('/update/{c_id}/{id}', 'update')->name('update');
        Route::get('/delete/{c_id}/{id}', 'destroy')->name('delete');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
