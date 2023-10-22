<?php

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/', function () {
//     return view('welcome');
// });
//  Route::get('/hello', function () {
//      return "<h1> hy larvel </h1>";
//  });

// Route::get('/hello', function () {
//     return view('post');
// });
// Route::view('/hello','post');
// Route::get('/hello/firstproject', function () {
//     return view('firstproject');
// });
Route::get('/hello/firstproject/{id}', function (string $id = null){
    return "<h1>".{$id}."</h1>";
});
Route::get('/hello/firstproject/{id}', function (string $id = null){
    return "<h1>".{$id}."</h1>";
});


