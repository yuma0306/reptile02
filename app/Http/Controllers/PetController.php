<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model
use App\Models\Pet;

class PetController extends Controller
{
    // indexページ
    public function index()
    {
        $pets = Pet::all();
        // dd($pets);
        return view('pet.index', compact('pets'));
    }

    // 詳細ページ
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pet.show', compact('pet'));
    }
}
