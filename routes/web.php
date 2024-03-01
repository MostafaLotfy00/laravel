<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SingleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
// use App\Http\Middleware\CheckName;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/mostafa', [TestController::class, 'mostafa'])->middleware('check_name');
// Route::get('/mostafa', [TestController::class, 'mostafa']);
// Route::get('/namePrint/{name?}', [TestController::class, 'printName'])->name("printRoute");
// Route::view('/mostafa','welcome2');
// Route::redirect('/here', '/start/public/mostafa');

# ROUTE GGROUPS

// Route::controller(TestController::class)->prefix('/test')->name('test.')->middleware('check_name')->group(function(){
// Route::get('/mostafa', 'mostafa');
// Route::get('/namePrint/{name?}', 'printName')->name("printRoute");
// });
// Route::get('/hello', [UserController::class, 'index']);
// Route::get('/invoke', SingleController::class);
// // Route::resource('posts',PostController::class)->only(['index', 'create']);
// // Route::resource('posts',PostController::class)->except(['index', 'create']);
// Route::resource('posts',PostController::class);
// Route::get('/login', function(){
// dd('welcome to login page');
// })->name('login');

// Route::get('/home', function(){
//     $data= ['name'=>'mostafa', 'age'=>24];
//     // return view('home',['data'=>$data]);
//     return view('home',compact('data'));
// });

# Theme Routes

Route::controller(ThemeController::class)->group(function(){
    Route::get('/about','about')->name('about-route');
    Route::get('/service','service')->name('service-route');
    Route::get('/contact','contact')->name('contact-route');
});