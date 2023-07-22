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

Route::get('/owner', function () {
    return view('owner.index');
})->middleware(['auth', 'verified'])->name('owner.index');

Route::middleware('auth')->group(function () {
    Route::get('/owner/profile', [ProfileController::class, 'edit'])->name('owner.profile.edit');
    Route::patch('/owner/profile', [ProfileController::class, 'update'])->name('owner.profile.update');
    Route::delete('/owner/profile', [ProfileController::class, 'destroy'])->name('owner.profile.destroy');
});

require __DIR__.'/auth.php';
