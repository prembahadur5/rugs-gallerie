<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Category extends Model
{
	 use HasFactory;
    protected $fillable = ['name', 'slug', 'image'];
	

	/*public function create()
	{
		$categories = Category::all();

		return view('admin.carpets.create', compact('categories'));
	}*/
	public function carpets()
    {
        return $this->hasMany(Carpet::class);
    }
}
