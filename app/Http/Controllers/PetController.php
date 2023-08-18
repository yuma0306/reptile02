<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// model
use App\Models\Pet;

class PetController extends Controller
{
    // indexページ
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $category = $request->input('category');
        if(isset($category)) {
            $query = Pet::query();
            $query->where('category', 'LIKE', "%{$category}%");
            $pets = $query->get();
            return view('pet.index', compact('pets', 'category'));
        }
        if(isset($keyword)) {
            $query = Pet::query();
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('species', 'LIKE', "%{$keyword}%");
            $pets = $query->get();
            return view('pet.index', compact('pets', 'keyword'));
        }
        $pets = Pet::all();
        return view('pet.index', compact('pets'));
    }

    // 詳細ページ
    public function show($id)
    {
        $pet = Pet::findOrFail($id);
        return view('pet.show', compact('pet'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('species', 'LIKE', "%{$keyword}%");
        }
        $pets = $query->get();
        return view('index', compact('pets', 'keyword'));
    }
}
