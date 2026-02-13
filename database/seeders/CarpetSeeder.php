<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Carpet;

class CarpetSeeder extends Seeder
{
    public function run()
    {
        Carpet::insert([
            [
                'category_id'=>1,
                'title'=>'Persian Hand Knotted',
                'slug'=>'persian-hand-knotted',
                'material'=>'Wool',
                'size'=>'6x9',
                'description'=>'Premium handmade carpet'
            ],
        ]);
    }
}
