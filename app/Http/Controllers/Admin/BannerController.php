<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  => 'nullable|string|max:255',
            'image'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        $path = $request->file('image')->store('banners', 'public');

        Banner::create([
            'title'  => $request->title,
            'image'  => $path,
            'status' => $request->status,
        ]);

        return redirect()
               ->route('admin.banners.index')
            ->with('success', 'Banner added successfully');
    }

    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->image);
        $banner->delete();

        return back()->with('success', 'Banner deleted');
    }
}
