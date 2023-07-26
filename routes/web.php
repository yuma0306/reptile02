<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// トップページ
use App\Http\Controllers\HomeController;
// ユーザー向け
use App\Http\Controllers\ShopController;
// オーナー関連
use App\Http\Controllers\Owner\OwnerShopController;

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

// ショップ一覧ページ
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
// ショップ詳細ページ
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.show');

// オーナートップ
Route::get('/owner', function () {
    return view('owner.index');
})->middleware(['auth', 'verified'])->name('owner.index');

// ショップ情報
Route::prefix('owner')->middleware('auth')->group(function () {
    // ショップ一覧を表示するルート
    Route::get('/shop', [OwnerShopController::class, 'index'])->name('owner.shop.index');
    // ショップ情報登録処理へのルート
    Route::post('/shop', [OwnerShopController::class, 'store'])->name('owner.shop.store');
    // ショップ情報登録画面へのルート
    Route::get('/shop/create', [OwnerShopController::class, 'create'])->name('owner.shop.create');
    // ショップ情報更新処理へのルート
    Route::get('/shop/{id}', [OwnerShopController::class, 'edit'])->name('owner.shop.edit');
    Route::put('/shop/{id}', [OwnerShopController::class, 'update'])->name('owner.shop.update');
    Route::delete('/shop/{id}', [OwnerShopController::class, 'destroy'])->name('owner.shop.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/owner/profile', [ProfileController::class, 'edit'])->name('owner.profile.edit');
    Route::patch('/owner/profile', [ProfileController::class, 'update'])->name('owner.profile.update');
    Route::delete('/owner/profile', [ProfileController::class, 'destroy'])->name('owner.profile.destroy');
});

require __DIR__.'/auth.php';
