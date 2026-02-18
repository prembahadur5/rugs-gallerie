<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cloudinary\Cloudinary;

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

    /*public function store(Request $request)
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
    }*/
	public function store(Request $request)
	{
		$request->validate([
			'title'  => 'required|string|max:255',
			'status' => 'required|boolean',
			'image'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
		]);

		// Cloudinary setup
		$cloudinary = new Cloudinary([
			'cloud' => [
				'cloud_name' => env('dxeollnwd'),
				'api_key'    => env('732853754476187'),
				'api_secret' => env('Z9ld2HRwJIjt0HoFiLAQCX4o_gw'),
			],
		]);

		// Upload image
		$upload = $cloudinary->uploadApi()->upload(
			$request->file('image')->getRealPath(),
			['folder' => 'banners']
		);

		// Save to DB
		Banner::create([
			'title'  => $request->title,
			'status' => $request->status,
			'image'  => $upload['secure_url'], // FULL URL
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
