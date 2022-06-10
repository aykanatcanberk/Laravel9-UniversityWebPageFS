<?php

use App\Http\Controllers\AdminPanel\AdminContentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\MenuController as AdminMenuController;


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
//1-do something in route
Route::get('/hello', function () {
    return view('Hello world');
});
//2-call view in route


Route::get('/welcome', function () {
    return view('welcome');
});

// ************HOME PAGE ROUTES************
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::view('/loginuser','home.login');
Route::view('/registeruser','home.register');
Route::get('/logoutuser',[HomeController::class, 'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login');
Route::post('/loginadmincheck',[HomeController::class, 'loginadmincheck'])->name('loginadmincheck');


//4- Route controller view
Route::get('/test', [HomeController::class, 'test'])->name('test');

//5-route with parameter
Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name('param');

//6 -Route with post
Route::post('/save', [HomeController::class, 'save'])->name('save');

Route::get('/content/{id}', [HomeController::class, 'content'])->name('content');
Route::get('/menucontent/{id}/{slug}', [HomeController::class, 'menucontent'])->name('menucontent');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//***Admin panel routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    //***General routes ROUTES
    Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');


//***Admin Menu routes
    Route::prefix('/menu')->name('menu.')->controller(AdminMenuController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    //***Admin Content routes
    Route::prefix('/content')->name('content.')->controller(AdminContentController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
    //***Admin Content image gallery routes
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{cid}', 'index')->name('index');
        Route::get('/create/{cid}', 'create')->name('create');
        Route::post('/store/{cid}', 'store')->name('store');
        Route::post('/update/{cid}/{id}', 'update')->name('update');
        Route::get('/destroy/{cid}/{id}', 'destroy')->name('destroy');
    });

    //***Admin messages routes
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/update/', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

    });
    //*** Admin FAQ  routes
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

});









