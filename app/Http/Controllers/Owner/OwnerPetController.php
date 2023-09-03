<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// 追加
use App\Models\Pet;
use App\Models\Shop;
use App\Models\User;

class OwnerPetController extends Controller
{
    public function index($shop_id)
    {
        // 指定された $shop_id に紐づく生体情報を取得
        $pets = Pet::where('shop_id', $shop_id)->get();
        // ショップの名前を取得
        $shop_name = Shop::where('id', $shop_id)->value('name');
        $shop_id = Shop::where('id', $shop_id)->value('id');
        // 生体情報一覧とショップの名前をビューに渡して表示
        return view('owner.shop.pet.index', compact('pets', 'shop_name', 'shop_id'));
    }

    public function create($shop_id)
    {
        $shop_id = Shop::where('id', $shop_id)->value('id');
        return view('owner.shop.pet.create', compact('shop_id'));
    }


    // バリデーションのcreateよりさきにidを取得データにひもづける,
    // ルーティングの定義により、{id} というプレースホルダーが指定されているため、LaravelがURLの中のこの部分を検知し、その値を自動的に関数の引数として渡します。
    public function store(Request $request, $shop_id)
    {
        // dd($request);
        $validationRules = $this->validateRules();
        $validatedData = $request->validate($validationRules);

        // ログインユーザーに紐づくショップ情報を取得
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        // 生体情報をデータベースに保存し、shop_idを自動的に紐づける
        $pet = $shop->pets()->create($validatedData);
        // pet_images テーブルに pet_image1 から pet_image4 のファイルパスを保存
        for ($i = 1; $i <= 4; $i++) {
            $imageField = "pet_image{$i}";
            if ($request->hasFile($imageField)) {
                $imagePath = $request->file($imageField)->store("pet_images/{$pet->id}", 'public');
                // 保存した画像のパスを対応する pet_image カラムに保存
                $pet->update([$imageField => $imagePath]);
            }
        }
        return redirect()->route('owner.shop.pet.index', ['id' => $shop->id])->with('success', '生体情報が登録されました');
    }

    // ペット情報の更新
    public function edit($shop_id, $pet_id)
    {
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        $pet = $shop->pets()->findOrFail($pet_id);
        return view('owner.shop.pet.edit', compact('shop', 'pet'));
    }

    // ペット情報の更新
    public function update(Request $request, $shop_id, $pet_id)
    {
        $validationRules = $this->validateRules();
        $validatedData = $request->validate($validationRules);

        $shop = auth()->user()->shops()->findOrFail($shop_id);
        $pet = $shop->pets()->findOrFail($pet_id);

        // 画像を更新するかチェック
        for ($i = 1; $i <= 4; $i++) {
            $imageField = "pet_image{$i}";
            if ($request->hasFile($imageField)) {
                // 古い画像を削除する
                if ($pet->{$imageField}) {
                    Storage::disk('public')->delete($pet->{$imageField});
                }
                $imagePath = $request->file($imageField)->store("pet_images/{$pet->id}", 'public');
                $validatedData[$imageField] = $imagePath;
            }
        }

        // データの更新
        $pet->update($validatedData);

        return redirect()->route('owner.shop.pet.index', ['id' => $shop->id])->with('success', '生体情報が更新されました');
    }

    // ペット情報削除
    public function destroy($shop_id, $pet_id)
    {
        $shop = auth()->user()->shops()->findOrFail($shop_id);
        $pet = $shop->pets()->findOrFail($pet_id);
        for ($i = 1; $i <= 4; $i++) {
            $imageField = "pet_image{$i}";
            if ($pet->{$imageField}) {
                // 個別の画像ファイルを削除
                Storage::disk('public')->delete($pet->{$imageField});
            }
        }
        $pet->delete();
        return redirect()->route('owner.shop.pet.index', ['id' => $shop->id])->with('success', '生体情報が削除されました');
    }

    public function validateRules()
    {
        return [
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'sex' => 'nullable|string|max:255',
            'morph' => 'nullable|string|max:255',
            'price' => 'nullable|string|max:255',
            'age' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'size' => 'nullable|string|max:255',
            'arrival_day' => 'nullable|date',
            'weight' => 'nullable|string|max:255',
            'pet_image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pet_image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pet_image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pet_image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'public_flag' => 'nullable|boolean',
            'sales_flag' => 'nullable|boolean',
        ];
    }
}
