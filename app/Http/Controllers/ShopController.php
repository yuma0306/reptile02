<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// model
use App\Models\Shop;

class ShopController extends Controller
{
    // indexページ
    public function index()
    {
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
