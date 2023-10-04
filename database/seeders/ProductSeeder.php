<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
        'code'=>'aw123',
        'name'=>'mamalemon',
        'price'=>'2000'
        ]);
        Product::create([
            'code'=>'aw867',
            'name'=>'ale-ale',
            'price'=>'1000'
            ]);
            Product::create([
                'code'=>'kiw123',
                'name'=>'macroni',
                'price'=>'1000'
                ]);Product::create([
                    'code'=>'uhuy154',
                    'name'=>'sukun',
                    'price'=>'20000'
                    ]);Product::create([
                        'code'=>'auu164',
                        'name'=>'milkkuat',
                        'price'=>'2000'
                        ]);
    }
}
