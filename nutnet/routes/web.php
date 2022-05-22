<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AlbumController::class, 'firstPage'])->name('index');

Route::get('/albums/{page}', [AlbumController::class, 'viewPage']);

Route::get('/edit', function () {
   return view('edit');
})->name('edit');

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

Route::post('/api/album/add', [AlbumController::class, 'add'])->name('album-add');
