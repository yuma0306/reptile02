<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// トップページ
use App\Http\Controllers\HomeController;
// ユーザー向け
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PetController;
// オーナー関連
use App\Http\Controllers\Owner\OwnerShopController;
use App\Http\Controllers\Owner\OwnerPetController;

// トップーページ
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/test', [HomeController::class, 'test'])->name('test');

// ショップ一覧ページ
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
// ショップ詳細ページ
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.show');

// 生体情報
Route::get('/pet', [PetController::class, 'index'])->name('pet.index');
Route::get('/pet/{pet_id}', [PetController::class, 'show'])->name('pet.show');

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
    // 各ショップの生体投稿index
    Route::get('/shop/{id}/pet', [OwnerPetController::class, 'index'])->name('owner.shop.pet.index');
    // 各ショップの生体投稿作成
    Route::get('/shop/{id}/pet/create', [OwnerPetController::class, 'create'])->name('owner.shop.pet.create');
    Route::post('/shop/{id}/pet/', [OwnerPetController::class, 'store'])->name('owner.shop.pet.store');
    // 各ショップの生体投稿編集
    Route::get('/shop/{id}/pet/{pet_id}', [OwnerPetController::class, 'edit'])->name('owner.shop.pet.edit');
    Route::put('/shop/{shop_id}/pet/{pet_id}', [OwnerPetController::class, 'update'])->name('owner.shop.pet.update');
    // 各ショップの生体投稿削除
    Route::delete('/shop/{shop_id}/pet/{pet_id}', [OwnerPetController::class, 'destroy'])->name('owner.shop.pet.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/owner/profile', [ProfileController::class, 'edit'])->name('owner.profile.edit');
    Route::patch('/owner/profile', [ProfileController::class, 'update'])->name('owner.profile.update');
    Route::delete('/owner/profile', [ProfileController::class, 'destroy'])->name('owner.profile.destroy');
});

require __DIR__.'/auth.php';
