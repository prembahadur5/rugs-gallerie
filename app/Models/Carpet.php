<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;



class Carpet extends Model
{
	 use HasFactory;
	 
	  //protected $fillable = [
        //'category_id','title','slug','price','image'
		//];
	//protected $connection = 'rugs_db';
    protected $fillable = [
		'category_id',
		'title',
		'slug',
		'material',
		'size',
		'price',
		'image',
		'is_featured',
		'status',
	];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
	
	protected static function booted()
	{
		static::deleting(function ($carpet) {
			if ($carpet->image && Storage::disk('public')->exists($carpet->image)) {
				Storage::disk('public')->delete($carpet->image);
			}
		});
	}
	public function images()
	{
		return $this->hasMany(CarpetImage::class);
	}


}
