<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// トップページ
use App\Http\Controllers\HomeController;
// オーナー関連
use App\Http\Controllers\Owner\ShopController;

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

// トップーページ
Route::get('/', [HomeController::class, 'index'])->name('home');

// オーナートップ
Route::get('/owner', function () {
    return view('owner.index');
})->middleware(['auth', 'verified'])->name('owner.index');

// ショップ情報
Route::prefix('owner')->middleware('auth')->group(function () {
    // ショップ一覧を表示するルート
    Route::get('/shop', [ShopController::class, 'index'])->name('owner.shop.index');
    // ショップ情報登録処理へのルート
    Route::post('/shop', [ShopController::class, 'store'])->name('owner.shop.store');
    // ショップ情報登録画面へのルート
    Route::get('/shop/create', [ShopController::class, 'create'])->name('owner.shop.create');
    // ショップ情報編集画面へのルート
    // Route::get('/shop/{id}/edit', [ShopController::class, 'edit'])->name('owner.shop.edit');
    // ショップ情報更新処理へのルート
    // Route::put('/shop/{id}', [ShopController::class, 'update'])->name('owner.shop.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/owner/profile', [ProfileController::class, 'edit'])->name('owner.profile.edit');
    Route::patch('/owner/profile', [ProfileController::class, 'update'])->name('owner.profile.update');
    Route::delete('/owner/profile', [ProfileController::class, 'destroy'])->name('owner.profile.destroy');
});

require __DIR__.'/auth.php';
