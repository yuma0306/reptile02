<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 追加
use App\Models\Pet;
use App\Models\Shop;
use App\Models\User;

class OwnerPetController extends Controller
{
    public function index($shop_id)
    {
        // 指定された $shop_id に紐づくペット情報を取得
        $pets = Pet::where('shop_id', $shop_id)->get();
        // ショップの名前を取得
        $shop_name = Shop::where('id', $shop_id)->value('name');
        $shop_id = Shop::where('id', $shop_id)->value('id');
        // ペット情報一覧とショップの名前をビューに渡して表示
        return view('owner.shop.pet.index', compact('pets', 'shop_name', 'shop_id'));
    }

    public function create($shop_id)
    {
        $shop_id = Shop::where('id', $shop_id)->value('id');
        return view('owner.shop.pet.create', compact('shop_id'));
    }

    // ルーティングの定義により、{id} というプレースホルダーが指定されているため、LaravelがURLの中のこの部分を検知し、その値を自動的に関数の引数として渡します。
    public function store(Request $request, $shop_id)
    {
        $validatedData = $request->validate([
            'category' => 'nullable|string|max:255',
            'species' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'age' => 'nullable|numeric|min:0',
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'size' => 'nullable|string|max:255',
        ]);
        // ログインユーザーに紐づくショップ情報を取得
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        // ペット情報をデータベースに保存し、shop_idを自動的に紐づける
        $pet = $shop->pets()->create($validatedData);
        return redirect()->route('owner.shop.pet.index', ['id' => $shop->id])->with('success', 'ペット情報が登録されました');
    }

    // ショップ情報画面
    public function edit($shop_id, $pet_id)
    {
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        $pet = $shop->pets()->findOrFail($pet_id);
        // dd($shop);
        // dd($pet);
        return view('owner.shop.pet.edit', compact('shop', 'pet'));
    }

    // ショップ情報更新
    public function update(Request $request, $shop_id, $pet_id)
    {
        $validatedData = $request->validate([
            'category' => 'nullable|string|max:255',
            'species' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'age' => 'nullable|numeric|min:0',
            'title' => 'required|string|max:255',
            'text' => 'required|string',
            'size' => 'nullable|string|max:255',
        ]);
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        $pet = $shop->pets()->findOrFail($pet_id);
        $pet->fill($validatedData);
        $pet->save();
        return redirect()->route('owner.shop.pet.index', ['id' => $shop->id])->with('success', 'ペット情報が更新されました');
    }

    // ショップ情報削除
    public function destroy($shop_id, $pet_id)
    {
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        $pet = $shop->pets()->findOrFail($pet_id);
        $pet->delete();
        return redirect()->route('owner.shop.pet.index', ['id' => $shop->id])->with('success', 'ペット情報が削除されました');
    }

}
