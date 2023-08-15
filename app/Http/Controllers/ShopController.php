<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// model
use App\Models\Shop;

class ShopController extends Controller
{
    // indexページ
    public function index(Request $request)
    {
        // $shops = Shop::all();
        // return view('shop.index', compact('shops'));
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {
            $query = Shop::query();
            $query->where('pref', 'LIKE', "%{$keyword}%");
            $shops = $query->get();
            return view('shop.index', compact('shops', 'keyword'));
        } else {
            $shops = Shop::all();
            return view('shop.index', compact('shops'));
        }
    }

    // 詳細ページ
    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shop.show', compact('shop'));
    }

}
