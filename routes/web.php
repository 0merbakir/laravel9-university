<?php

use App\Http\Controllers\AdminPanel\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\MenuController;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ContentController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MenuController as AdminPanelMenuController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\UserController;

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

// ***************home page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('aboutus');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/content/{id}', [HomeController::class, 'content'])->name('content');
Route::get('/menucontent/{id}/{slug}', [HomeController::class, 'menucontent'])->name('menucontent');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::view('/loginuser', 'home.login')->name('loginuser');
Route::view('/registeruser', 'home.register')->name('registeruser');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');
Route::view('/loginadmin', 'admin.login')->name('loginadmin');




//***********************************USER AUTH CONTROL*/
Route::middleware('auth')->group(function () {


    //***********************************USER ROUTES*/
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/reviews', 'reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}', 'reviewdestroy')->name('reviewdestroy');
    });


    //***********************************admin routes */
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        //*************** General Routes*** */
        Route::get('/setting', [AdminController::class, 'setting'])->name('setting');
        Route::post('/setting/update', [AdminController::class, 'updateSetting'])->name('updatesetting');

        //********************** Admin menu routes */
        Route::prefix('menus')->name('menus.')->controller(MenuController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        //********************* Admin Content routes */
        Route::prefix('contents')->name('contents.')->controller(ContentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        //********************* Admin Content Image Gallery routes */
        Route::prefix('images')->name('images.')->controller(ImageController::class)->group(function () {
            Route::get('/{c_id}', 'index')->name('index');
            Route::get('/create/{c_id}', 'create')->name('create');
            Route::post('/store/{c_id}', 'store')->name('store');
            Route::post('/update/{c_id}/{id}', 'update')->name('update');
            Route::get('/delete/{c_id}/{id}', 'destroy')->name('delete');
        });

        //********************* Admin comments routes */
        Route::prefix('comments')->name('comments.')->controller(CommentController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        //********************* Admin messages routes */
        Route::prefix('messages')->name('messages.')->controller(MessageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        //********************* Admin Faq routes */
        Route::prefix('faq')->name('faq.')->controller(FaqController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        //********************* Admin user routes */
        Route::prefix('users')->name('users.')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');
        });
    });
});



