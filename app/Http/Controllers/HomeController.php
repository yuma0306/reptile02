<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $pets = Pet::all();
        // $shops = Shop::all();
        // return view('home', compact('pets', 'shops'));
        return view('home');
    }
}
