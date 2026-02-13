<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carpet;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarpetController extends Controller
{
    public function index()
    {
        $carpets = Carpet::latest()->get();
        return view('admin.carpets.index', compact('carpets'));
    }

    public function create()
	{
		$categories = Category::all();
		return view('admin.carpets.create', compact('categories'));
	}


    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title'       => 'required|string|max:255',
            'material'    => 'nullable|string',
            'size'        => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data['slug'] = Str::slug($data['title']);

        // Main image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('carpets', 'public');
        }

        // Create carpet FIRST
        $carpet = Carpet::create($data);

        // Gallery images (optional)
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $path = $img->store('carpets/gallery', 'public');
                $carpet->images()->create([
                    'image' => $path
                ]);
            }
        }

        return redirect()->route('admin.carpets.index')
            ->with('success', 'Carpet added successfully');
    }

    public function edit(Carpet $carpet)
    {
        $categories = Category::all();
        return view('admin.carpets.edit', compact('carpet', 'categories'));
    }

    public function update(Request $request, Carpet $carpet)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title'       => 'required|string|max:255',
            'material'    => 'nullable|string',
            'size'        => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
        ]);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            if ($carpet->image && Storage::disk('public')->exists($carpet->image)) {
                Storage::disk('public')->delete($carpet->image);
            }
            $data['image'] = $request->file('image')->store('carpets', 'public');
        }

        $carpet->update($data);

        return redirect()->route('admin.carpets.index')
            ->with('success', 'Carpet updated');
    }
}
