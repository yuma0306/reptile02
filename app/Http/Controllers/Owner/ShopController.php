<?php

namespace App\Http\Controllers\Owner;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    // indexページ
    public function index()
    {
        // ショップ情報を全て取得する
        $shops = Shop::all();
        // 取得したショップ情報をビューに渡して、owner/shop/index.blade.php を表示する
        return view('owner.shop.index', compact('shops'));
    }

    // ショップ情報登録画面表示
    public function create()
    {
        return view('owner.shop.create');
    }

    // ショップ情報登録処理
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'business_hours' => 'nullable|string|max:255',
            'regular_holiday' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'access_method' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'postal_code' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'google_map' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'sns' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'available_pets' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'available_feeds' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'website' => 'nullable|string|max:255',
        ]);
        // ログインユーザーのIDと一緒にデータを保存
        auth()->user()->shops()->create($validatedData);
        return redirect()->route('owner.shop.index')->with('success', 'ショップ情報が登録されました');
    }

    // ショップ情報編集画面表示
    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('owner.shop.edit', compact('shop'));
    }

    // ショップ情報更新処理
    public function update(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);
        // バリデーションなどの処理を行い、データをDBに更新する処理を実装
    }
}
