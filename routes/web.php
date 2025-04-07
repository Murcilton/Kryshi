<?php

use App\Http\Controllers\AdvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('test',[AdvController::class,'test'])->name('test');
Route::post('test1/{id}',[AdvController::class,'test1'])->name('test1');
Route::delete('test2/{id}',[AdvController::class,'test2'])->name('test2');
Route::put('test3/{id}',[AdvController::class,'test3'])->name('test3');

require __DIR__.'/auth.php';
