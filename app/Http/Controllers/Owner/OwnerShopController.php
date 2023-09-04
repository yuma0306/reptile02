<?php

namespace App\Http\Controllers\Owner;
use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OwnerShopController extends Controller
{
    // indexページ
    public function index()
    {
        $shops = Auth::user()->shops;
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
        // dd($request);
        $validatedData = $request->validate([
            'shop_name' => 'required|string|max:255',
            'business_hours' => 'nullable|string|max:255',
            'regular_holiday' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'access_method' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'postal_code' => 'nullable|string|max:255',
            'pref' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'google_map' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'sns' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'available_pets' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'available_feeds' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'website' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // 画像を更新するかチェック
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }
        // ログインユーザーのIDと一緒にデータを保存
        auth()->user()->shops()->create($validatedData);
        return redirect()->route('owner.shop.index')->with('success', 'ショップ情報が登録されました');
    }

    // ショップ情報画面
    public function edit($id)
    {
        // 現在ログインしているユーザーに紐付けられたショップのみを取得
        $shop = Auth::user()->shops()->findOrFail($id);
        return view('owner.shop.edit', compact('shop'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        // バリデーションの実行
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'business_hours' => 'nullable|string|max:255',
            'regular_holiday' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'payment_method' => 'nullable|string|max:255',
            'access_method' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'postal_code' => 'nullable|string|max:255',
            'pref' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'google_map' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'sns' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'available_pets' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'available_feeds' => 'nullable|string|max:65535', // textカラムはmaxが65535
            'website' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // dd($validatedData);

        // ログインユーザーに紐づくショップ情報を取得
        $shop = auth()->user()->shops()->findOrFail($id);
        // dd($shop);

        // 画像を更新するかチェック
        if ($request->hasFile('image')) {
            // 古い画像を削除する
            if ($shop->image) {
                Storage::disk('public')->delete($shop->image);
            }
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $path;
        }
        // データの更新
        $shop->update($validatedData);
        return redirect()->route('owner.shop.index')->with('success', 'ショップ情報が更新されました');
    }

    public function destroy($id)
    {
        $shop = auth()->user()->shops()->findOrFail($id);
        // 画像が存在する場合はストレージからも削除する
        if ($shop->image) {
            Storage::disk('public')->delete($shop->image);
        }
        $shop->delete();
        return redirect()->route('owner.shop.index')->with('success', 'ショップが削除されました');
    }
}
