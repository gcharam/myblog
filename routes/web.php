<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;

use App\Http\Controllers\NewGamesController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ReleasesController;

use App\Http\Controllers\ShowGamesController;

use App\Http\Controllers\ShowKindsController;

use App\Http\Middleware\Access;

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
Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/', [PostsController::class, 'showpost'])->name('index');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('auth');

Route::get('/admin/newpost', [PostsController::class, 'createpost'])->name('newpost')->middleware(['auth','access']);

Route::get('/admin/latest', [ReleasesController::class, 'createRelease'])->name('latest')->middleware(['auth','access']);

Route::post('/submit-latest', [ReleasesController::class, 'submit_latest'])->middleware(['auth','access']);

//Delete test game
ROute::get('/delete/testgame/{id}', [PostsController::class, 'deletepost'])->middleware(['auth','access']);

Route::get('/admin/newgame', [NewGamesController::class, 'creategame'])->name('newgame')->middleware(['auth','access']);

Route::get('/showgame/{Console}', [ShowGamesController::class, 'showgame'])->name('showgame');

Route::get('/showkind/{Kind}/{KindID}', [ShowKindsController::class, 'showkind'])->name('showkind');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

