<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Carpet;

class CarpetController extends Controller
{
    public function index()
    {
        //$categories = Category::with('carpets')->get();
        //return view('frontend.carpets.index', compact('categories'));
		
		//$carpets = Carpet::latest()->get(); // fetch from DB
        //return view('frontend.carpets.index', compact('carpets'));
		 $categories = Category::with('carpets')->get();

		return view('frontend.carpets.index', compact('categories'));
    }

    public function show($slug)
    {
        $carpet = Carpet::where('slug', $slug)->firstOrFail();

        return view('frontend.carpets.show', compact('carpet'));
    }

    public function byCategory($slug)
    {
        $category = Category::where('slug', $slug)
            ->with('carpets')
            ->firstOrFail();

        return view('frontend.carpets.category', compact('category'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.carpets.create', compact('categories'));
    }
}
