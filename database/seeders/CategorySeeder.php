<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name'=>'Hand Knotted Carpets','slug'=>'hand-knotted'],
            ['name'=>'Hand Tufted Carpets','slug'=>'hand-tufted'],
            ['name'=>'Wool & Silk Carpets','slug'=>'wool-silk'],
        ]);
    }
}

