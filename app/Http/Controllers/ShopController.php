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
        $pref = $request->input('pref');
        $keyword = $request->input('keyword');

        if(isset($pref)) {
            $query = Shop::query();
            $query->where('pref', 'LIKE', "%{$pref}%");
            // dd($query->toSql());
            $shops = $query->get();
            return view('shop.index', compact('shops', 'pref'));
        }

        if(isset($keyword)) {
            $query = Shop::query();
            $query->where('name', 'LIKE', "%{$keyword}%");
            $shops = $query->get();
            return view('shop.index', compact('shops', 'keyword'));
        }

        $shops = Shop::all();
        return view('shop.index', compact('shops'));
    }

    // 詳細ページ
    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        return view('shop.show', compact('shop'));
    }

}
