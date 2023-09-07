<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// model
use App\Models\Shop;
use App\Models\Pet;

class ShopController extends Controller
{
    // indexページ
    public function index(Request $request)
    {
        $pref = $request->input('pref');
        $keyword = $request->input('keyword');

        if(isset($pref)) {
            $query = Shop::query();
            $query->where('pref', 'LIKE', "%{$pref}%");
            $shops = $query->get();
            return view('shop.index', compact('shops', 'pref'));
        }

        if(isset($keyword)) {
            $query = Shop::query();
            $query->where('shop_name', 'LIKE', "%{$keyword}%");
            $shops = $query->get();
            return view('shop.index', compact('shops', 'keyword'));
        }

        $shops = Shop::all();
        return view('shop.index', compact('shops'));
    }

    // 詳細ページ
    public function show($id)
    {
        $pets = Pet::where('shop_id', $id)->get();
        $shop = Shop::findOrFail($id);
        if ($shop && $shop->public_flag === 1) {
            return redirect()->route('shop.index');
        }
        return view('shop.show', compact('shop', 'pets'));
    }

}
