<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
	{
		$categories = Category::withCount('carpets')->get();
		$banners = Banner::where('status', true)->latest()->get();

		return view('frontend.home', compact('categories', 'banners'));
	}

}
